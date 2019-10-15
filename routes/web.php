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
Route::get('ID/{id}',function($id) {
   echo 'ID: '.$id;
});
Route::get('user/{name?}', function ($name = 'admin') { return $name;});
Route::get('users/profile', 'UserController@showProfile')->name('profile');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/internships', 'HomeController@internships')->name('internships');
Route::get('/activities', 'HomeController@activities')->name('activities');
Route::get('/add-activities', 'HomeController@add_activities')->name('add-activities');
Route::get('/add-internship', 'HomeController@add_internship')->name('add-internship');