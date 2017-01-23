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
Route::group(['middleware' => ['checkStatus', 'auth']], function()
{
    Route::resource('user', 'UserController' , [
        'only' => ['index', 'edit', 'update']
    ]);
});

Route::get('/home', 'HomeController@index');
Route::get('/redirect', 'SocialAccountController@redirect');
Route::get('/callback', 'SocialAccountController@callback');
 
Route::group(['middleware'=> ['checkStatus','admin'], 'prefix' => 'admin' ], function (){
    Route::get('/', function(){
         return view('admin.index');
     });
    Route::get('/student', 'StudentController@index');
    Route::get('/teacher', 'TeacherController@index');
    Route::get('student/detail/{id}', 'StudentController@show')->name('admin-showstudent');
    Route::get('teacher/detail/{id}', 'TeacherController@show')->name('admin-showteacher');
    Route::get('user/{id}', 'UserController@destroy')->name('admin-delete');
    Route::get('block/student/{id}', 'StudentController@blockUser')->name('student-block');
    Route::get('block/teacher/{id}', 'TeacherController@blockUser')->name('teacher-block');


});
Route::group(['middleware'=> 'teacher', 'prefix' => 'teacher' ], function (){
    Route::get('/', function(){
         return view('admin.index');
     });
   
});