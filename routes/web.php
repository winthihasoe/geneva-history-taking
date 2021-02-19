<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ChildHistoryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware('auth')->group(function(){

    Route::get('/',[PageController::class,'index'])->name('home');
    Route::get('/home',[PageController::class,'index'])->name('home');
    Route::get('/addelderhistory',[PageController::class,'add_elder_history'])->name('add_elder_history');
    Route::post('/addelderhistory',[HistoryController::class,'insert_elder_history'])->name('insert_elder_history');
    Route::get('/addchildhistory',[PageController::class,'add_child_history'])->name('add_child_history');
    Route::post('/addchildhistory',[ChildHistoryController::class,'insert_child_history'])->name('insert_child_history');
    Route::get('/patientlist',[PageController::class,'patientlist'])->name('patientlist');
    Route::get('/singlepatient/{id}',[PageController::class,'singlePatient'])->name('singlePatient');
    Route::get('/editHistory/{id}',[PageController::class,'editHistory'])->name('editHistory');
    Route::post('/editHistory/{id}',[HistoryController::class,'update_history'])->name('update_history');
    
    // auth 
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');

    // admin 
    Route::middleware('admin')->group(function(){
        Route::get('/admin/index',[AdminController::class,'index'])->name('admin.index');
        Route::get('/admin/patientlist',[AdminController::class,'patientlist'])->name('admin.patientlist');
        Route::get('/admin/patientlist/singlepatient/{id}',[AdminController::class,'singlePatient'])->name('admin.singlePatient');
        Route::get('/admin/patientlist/editHistory/{id}',[AdminController::class,'editHistory'])->name('admin.editHistory');
        Route::post('/admin/patientlist/editHistory/{id}',[AdminController::class,'update_history'])->name('admin.update_history');
        Route::get('/admin/supervisors',[AdminController::class,'supervisors'])->name('admin.supervisors');
        Route::get('/admin/myprofile', [AuthController::class, 'myprofile'])->name('myprofile');
        Route::post('/admin/myprofile', [AuthController::class, 'updateprofile'])->name('updateprofile');
    });
    
});

Route::middleware('guest')->group(function(){
    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::post('/login',[AuthController::class,'post_login'])->name('post_login');
    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::post('/register',[AuthController::class,'post_register'])->name('post_register');
});