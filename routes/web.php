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
Route::get('/modul/list', 'Modul\ListController@tampilkan');
Route::get('/modul/riwayat', 'Modul\RiwayatController@tampilkan');
Route::get('/modul/video', 'Modul\VideoController@tampilkan');

// by Arif
Route::get('/landing', 'LandingPageController@tampilkan');

Route::get('/modul/upload', 'Modul\UploadController@upload');
Route::post('/modul/upload/proses', 'Modul\UploadController@proses_upload');
Route::get('/upload/hapus/{id}', 'Modul\UploadController@hapus');

Route::get('/modul/riwayat/temp', 'Modul\RiwayatController@tampilkan_temp');

// by Ghif
Route::get('/artikel/list', 'Artikel\ListController@tampilkan');
// Route::get('/artikel/riwayat', 'Modul\RiwayatController@tampilkan');

//by April
Route::get('/subscription/metode', 'Subscription\MetodeController@tampilkan');