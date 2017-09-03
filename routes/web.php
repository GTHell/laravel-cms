<?php

use App\User;
use App\Post;
use App\Role;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts','PostController');

Route::get('/user',function(){
   return User::find(1)->post;
});

Route::get('/role', function(){
   return User::find(1)->roles()->get();
});

Route::get('/users', function(){
    return Role::find(1)->users()->get();
});