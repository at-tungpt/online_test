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
Route::get('/redirect', 'SocialAccountController@redirect');
Route::get('/callback', 'SocialAccountController@callback');
Route::group(['middleware'=> 'admin', 'prefix' => 'admin' ], function (){
    Route::get('/', function(){
         return view('admin.index');
     });
   
});
Route::group(['middleware'=> 'teacher', 'prefix' => 'teacher' ], function (){
    Route::get('/', function(){
         return view('admin.index');
     });
   
});