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

Route::get('/', 'HomeController@index_home');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/publikasi', 'HomeController@index_publikasi');
Route::get('/organisasi_kemahasiswaan', 'HomeController@organisasi_kemahasiswaan');
Route::get('/post/{id}', 'HomeController@view_post');
Route::get('/login_hima', 'ClientController@masuk_hima');
Route::post('/login_hima', 'ClientController@login_client');


//Akses Grup Untuk Client
Route::group(['middleware' => ['web']], function () {
    //Menu User HIMA
    Route::get('/index_user_hima', 'AdminController@index_user_hima');
    Route::get('/tambah_user_hima', 'AdminController@form_tambah_user_hima');
    Route::get('/update_user_hima/{id}', 'AdminController@form_update_user_hima');
    Route::post('/update_user_hima', 'AdminController@simpan_perubahan_user_hima');
    Route::post('/tambah_user_hima', 'AdminController@simpan_user_hima');
    Route::post('/hapus_user_hima', 'AdminController@hapus_user_hima');

    //Menu User UKM
    Route::get('/index_user_ukm', 'AdminController@index_user_ukm');
    Route::get('/tambah_user_ukm', 'AdminController@form_tambah_user_ukm');
    Route::get('/update_user_ukm/{id}', 'AdminController@form_update_user_ukm');
    Route::post('/update_user_ukm', 'AdminController@simpan_perubahan_user_ukm');
    Route::post('/tambah_user_ukm', 'AdminController@simpan_user_ukm');
    Route::post('/hapus_user_ukm', 'AdminController@hapus_user_ukm');

    //Menu Organisasi
    Route::get('/index_organisasi', 'AdminController@index_organisasi');
    Route::get('/admin/organisasi/tambah', 'AdminController@tambah_organisasi');
    Route::post('/admin/organisasi/simpan', 'AdminController@simpan_organisasi');
    Route::get('/admin/organisasi/edit/{id}', 'AdminController@edit_organisasi');
    Route::post('/admin/organisasi/simpan_edit', 'AdminController@simpan_edit_organisasi');
    Route::post('/admin/organisasi/hapus', 'AdminController@hapus_organisasi');
});

//Akses Grup Untuk Client
Route::group(['middleware' => ['client']], function () {
    //Login Routes...
    Route::get('/client/index','ClientController@index_client');
	Route::get('/posting_kegiatan', 'ClientController@posting_kegiatan');
    Route::post('/client/tambah_kegiatan', 'ClientController@tambah_kegiatan');
});