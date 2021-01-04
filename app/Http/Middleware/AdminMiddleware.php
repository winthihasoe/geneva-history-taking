<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // check current user is Admin or not 
        $id=auth()->user()->id;
        $current_user=User::find($id);
        if($current_user->admin == '1'){
            return $next($request);
        }else{
            return redirect()->route('home');
        }
    }
}
