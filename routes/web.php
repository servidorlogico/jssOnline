<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('post','PostController');
Route::get('/{nickname}',[
    'uses'=>'UserController@profile',
    'as'=>'user.profile'
    ]);
    
Route::get('/phpmyadmin',function(){
    
    return view('errors/503'); 
});




Auth::routes();

Route::get('/home', 'HomeController@index');
