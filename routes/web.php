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

use Illuminate\Auth\Middleware\Authenticate;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ModulController by Ardha
Route::get('/modul/list', 'Modul\ListController@tampilkan');
Route::get('/modul/riwayat', 'Modul\RiwayatController@tampilkan')->middleware('auth');
Route::get('/modul/video', 'Modul\VideoController@tampilkan')->middleware('auth');

// by Arif
Route::get('/landing', 'LandingPageController@tampilkan');

Route::get('/modul/upload', 'Modul\UploadController@tampilkan')->middleware('auth');
Route::post('/modul/upload/proses', 'Modul\UploadController@tambahModul')->middleware('auth');
Route::get('/modul/upload/hapus/{id}', 'Modul\UploadController@hapusModul')->middleware('auth');
Route::get('/modul/upload/edit/{modulid}', 'Modul\UploadController@editModul')->middleware('auth');
Route::post('/modul/upload/edit/proses', 'Modul\UploadController@updateModul')->middleware('auth');
Route::post('/modul/upload/edit/hapus/{modulid}/{videoid}', 'Modul\UploadController@hapusVideo')->middleware('auth');

Route::get('/modul/riwayat/temp', 'Modul\RiwayatController@tampilkan_temp')->middleware('auth');

Route::get('/modul/video/temp/{modulid}', 'Modul\VideoController@tampilkan_temp')->middleware('auth');
Route::get('/modul/video/{modulid}/{videoid}', 'Modul\VideoController@tampilkanVideo')->middleware('auth');

Route::get('/artikel/upload', 'Artikel\UploadController@tampilkan')->middleware('auth');

// by Ghif
Route::get('/artikel/list', 'Artikel\ListController@tampilkan');

// by Bashara
Route::get('/profil/ubah', 'Pengaturan\UbahProfilController@tampilkan');
Route::get('/profil/langganan', 'Pengaturan\LanggananController@tampilkan');
Route::get('/profil/setting', 'Pengaturan\SettingController@tampilkan');

// Route::get('/artikel/riwayat', 'Modul\RiwayatController@tampilkan');

//by April

Route::get('/subscription', 'Subscription\MetodeController@tampilkan');
Route::get('/subscription/metode/{id}', 'Subscription\MetodeController@tampilkanmetode');
Route::get('/subscription/payment/{id}', 'Subscription\MetodeController@tampilkanVA');

Route::get('/subscription/generate', 'Subscription\MetodeController@generateVANumber');

