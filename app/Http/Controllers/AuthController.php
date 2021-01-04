<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // show login form 
    function login(){
        return view('auth.login');
    }

    
    function post_login(){

        // validate data in associated field 
        $validation=request()->validate([
            "email"=>"required",
            "password"=>"required"
        ]);

        if($validation){
            // match email and password from user input 
            $auth=Auth::attempt([
                "email"=>$validation['email'],
                "password"=>$validation['password']
            ]);
            if($auth){
                return redirect()->route('home');
            }else{
                return back()->with('error','Authentication failed');
            }

        }else{
            return back()->withErrors($validation);
        }
    }

    // show register form 
    function register(){
        return view('auth.register');
    }

    function post_register(){
        // validate data in associated field 
        $validation=request()->validate([
            "username"=>"required",
            "email"=>"required",
            "password"=>"required",
        ]);

        if($validation){
            // save new user data to db 
            $user=new User;
            $user->username=$validation['username'];
            $user->email=$validation['email'];
            $password=$validation['password'];
            $user->password=Hash::make($password);
            $user->save();
            return redirect()->route('home');
        }else{
            return back()->withErrors($validation);
        } 
    }

    // logout
    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    // show myprofile page 
    function myprofile(){
        return view('admin.myprofile');
    }

    // update userprofile
    function updateprofile(){
        // get name from input field
        $username=request('username');
        $email=request('email');
        $oldpassword=request('oldpassword');
        $newpassword=request('newpassword');

        $id=auth()->user()->id;
        $current_user=User::find($id);
        $current_user->username=$username;
        $current_user->email=$email;
        
        if($oldpassword && $newpassword){
            // compare to old password 
            if(Hash::check($oldpassword,$current_user->password)){
                // let user to change new password
                $current_user->password=Hash::make($newpassword);

            }else{
                return back()->with('error', "Password didn't match");
            }
        }
        $current_user->update();
        return back()->with('success','Your Profile is updated');
    }
    
}
