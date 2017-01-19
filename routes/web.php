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
Route::get('/login_hima', 'HomeController@masuk_hima');

//Menu User HIMA
Route::get('/index_user_hima', 'AdminController@index_user_hima');
Route::get('/tambah_user_hima', 'AdminController@form_tambah_user_hima');
Route::get('/update_user_hima/{id}', 'AdminController@form_update_user_hima');
Route::post('/update_user_hima', 'AdminController@simpan_perubahan_user_hima');
Route::post('/tambah_user_hima', 'AdminController@simpan_user_hima');

