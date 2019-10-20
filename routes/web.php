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
Route::get('/results', 'HomeController@results')->name('results');

Route::get('/add-activities', 'HomeController@add_activities')->name('add-activities');
Route::get('/add-internship', 'HomeController@add_internship')->name('add-internship');
Route::get('/add-results', 'HomeController@add_result')->name('add-results');

Route::post('/insert-internship', 'HomeController@insert_internship')->name('insert-internship');
Route::post('/insert-activities', 'HomeController@insert_activities')->name('insert-activities');
Route::post('/insert-results', 'HomeController@insert_results')->name('insert-results');

Route::post('/delete-activities', 'HomeController@delete_activities')->name('delete-activities');
Route::get('/delete-activities', 'HomeController@delete_activities')->name('delete-activities');
Route::post('/delete-internship', 'HomeController@delete_internship')->name('delete-internship');
Route::get('/delete-internship', 'HomeController@delete_internship')->name('delete-internship');


Route::get('/edit-profile', 'HomeController@edit_profile')->name('edit-profile');
Route::post('/edit-activities', 'HomeController@edit_activities')->name('edit-activities');
Route::post('/update-activities', 'HomeController@update_activities')->name('update-activities');
Route::post('/edit-internship', 'HomeController@edit_internship')->name('edit-internship');
Route::get('/edit-internship', 'HomeController@edit_internship')->name('edit-internship');
Route::post('/update-internship', 'HomeController@update_internship')->name('update-internship');
Route::get('/edit-activities', 'HomeController@edit_activities')->name('edit-activities');
Route::post('/edit-activities', 'HomeController@edit_activities')->name('edit-activities');


Route::post('/upload-activities', 'HomeController@upload_activities')->name('upload-activities');
Route::post('/upload-internships', 'HomeController@upload_internships')->name('upload-internships');