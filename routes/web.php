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
    return redirect('/landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ModulController by Ardha
Route::get('/modul/list', 'Modul\ListController@tampilkan');
Route::get('/modul/riwayat', 'Modul\RiwayatController@tampilkan')->middleware('auth');
Route::get('/modul/video/{modulid}', 'Modul\VideoController@tampilkanModul')->middleware('auth');

// by Arif
Route::get('/landing', 'LandingPageController@tampilkan');

Route::get('/modul/riwayat/hapus/{modulid}', 'Modul\RiwayatController@hapusRiwayat')->middleware('auth');
Route::get('/modul/cari','Modul\ListController@pencarian');

Route::get('/modul/upload', 'Modul\UploadController@tampilkan')->middleware('auth');
Route::post('/modul/upload/proses', 'Modul\UploadController@inputModul')->middleware('auth');
Route::get('/modul/upload/hapus/{id}', 'Modul\UploadController@hapusModul')->middleware('auth');
Route::get('/modul/upload/edit/{modulid}', 'Modul\UploadController@editModul')->middleware('auth');
Route::post('/modul/upload/edit/proses', 'Modul\UploadController@updateModul')->middleware('auth');
Route::get('/modul/upload/edit/hapus/{modulid}/{videoid}', 'Modul\UploadController@hapusVideo')->middleware('auth');
Route::post('/modul/upload/edit/video/add', 'Modul\UploadController@simpanVideo')->middleware('auth');

Route::get('/modul/video/{modulid}/{videoid}', 'Modul\VideoController@tampilkanVideo')->middleware('auth');
Route::post('/modul/video/laporan', 'Modul\VideoController@simpanLaporan')->middleware('auth');

Route::get('/artikel/upload', 'Artikel\UploadController@tampilkan')->middleware('auth');
Route::post('/artikel/upload/proses', 'Artikel\UploadController@simpanArtikel')->middleware('auth');
Route::get('/artikel/upload/hapus/{id}', 'Artikel\UploadController@hapusArtikel')->middleware('auth');

Route::get('/profil/ganti-password', 'Auth\GantiPasswordController@display')->middleware('auth');
Route::post('/profil/ganti-password/save', 'Auth\GantiPasswordController@save')->middleware('auth');

// by Ghif
Route::get('/artikel/list', 'Artikel\ListController@tampilkan');
Route::get('/artikel/isi/{id}', 'Artikel\IsiController@tampilkan');
Route::get('/artikel/cari','Artikel\ListController@pencarian');


// by Bashara
Route::get('/profil/ubah', 'Pengaturan\UbahProfilController@tampilkan')->middleware('auth');
Route::get('/profil/langganan', 'Pengaturan\LanggananController@tampilkan')->middleware('auth');
Route::get('/profil/setting', 'Pengaturan\SettingController@tampilkan')->middleware('auth');
Route::post('/profil/ubah/simpan', 'Pengaturan\UbahProfilController@simpanDataDiri')->middleware('auth');
Route::get('/logout', 'Pengaturan\SettingController@logout')->middleware('auth');
Route::get('/delete', 'Pengaturan\SettingController@deleteAccount')->middleware('auth');

// Route::get('/artikel/riwayat', 'Modul\RiwayatController@tampilkan');

//by April

Route::get('/subscription', 'Subscription\MetodeController@tampilkan');
Route::get('/subscription/metode/{id}', 'Subscription\MetodeController@tampilkanmetode');
Route::get('/subscription/payment/{id}', 'Subscription\MetodeController@tampilkanVA');

Route::get('/subscription/generate/{id}', 'Subscription\MetodeController@generateVANumber');
Route::get('/subscription/payment/process/{id}', 'Subscription\MetodeController@ubahStatusPembayaran');

