<?php

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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/userlayout', 'UserController@index')->name('userhome');

// Route::post('/user/userlayout', 'UserController@dashboard')->name('userdashboard');

Route::get('/user/calendar', 'UserController@calendar')->name('usercalendar');
Route::get('/user/task', 'UserController@task')->name('usertask');
Route::get('/welcome', 'HomeController@index')->name('welcome');

Route::post('/user/task','TaskController@store')->name('tasksubmit');

