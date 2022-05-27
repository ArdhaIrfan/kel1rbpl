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

//ModulController by Ardha
Route::get('/list-modul', 'Modul\ListController@tampilkan');
Route::get('/riwayat-modul', 'Modul\RiwayatController@tampilkan');
Route::get('/video-modul', 'Modul\VideoController@tampilkan');

// by Arif
Route::get('/landing', 'LandingPageController@tampilkan');

Route::get('/modul/upload', 'Modul\UploadController@upload');
Route::post('/modul/upload/proses', 'Modul\UploadController@proses_upload');
Route::get('/upload/hapus/{id}', 'Modul\UploadController@hapus');
