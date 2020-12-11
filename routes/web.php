<?php

use Illuminate\Support\Facades\Route;


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

//USER

Route::get('/komunikasi', [App\Http\Controllers\KomunikasiController::class, 'create'])->name('komunikasi');
Route::post('/komunikasi', [App\Http\Controllers\KomunikasiController::class, 'store']);


//Route::view('/', 'user.index')->name('index');
Route::get('/', [App\Http\Controllers\CovidController::class, 'index'])->name('index');

//Route::view('/', 'user.index')->name('index');
//Route::get('/', [App\Http\Controllers\KomunikasiController::class, 'index']);

Route::view('/profil', 'user.profil')->name('profil');
Route::view('/agenda', 'user.agenda')->name('agenda');
Route::get('/berita', [App\Http\Controllers\HomeController::class, 'indexBerita'])->name('berita');
Route::get('/berita/read/{slug}', [App\Http\Controllers\HomeController::class, 'readBerita'])->name('read-berita');

Route::view('/agenda-detail', 'user.agenda-detail')->name('agenda-detail');
Route::view('/informasi', 'user.informasi')->name('informasi'); //INFORMASI KEBUTUHAN DARAH DINAMIS
Route::view('/pengajuan-event-donor', 'user.pengajuan-event-donor')->name('pengajuan-event-donor');
//Route::view('/registrasi-donor', 'user.registrasi-donor')->name('registrasi-donor');
Route::view('/addmintadarah', 'user.addmintadarah')->name('addmintadarah');
Route::view('/komunikasi', 'user.komunikasi')->name('komunikasi');
Route::view('/hubungi-kami', 'user.hubungi-kami')->name('hubungi-kami');
Route::view('/faq', 'user.faq')->name('faq');

Route::view('/cekriwayat', 'user.riwayat')->name('cekriwayat');
//Route::view('/berita','user.berita')->name('berita');
Route::view('/stok-darah','user.stok-darah')->name('stok-darah');

Route::view('/cekriwayat', 'user.riwayat')->name('riwayat');
//Route::view('/berita','user.berita')->name('berita');


//ADMIN
Auth::routes();
Route::group(['middleware' => 'auth'], function(){
    Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => 'auth' ], function () {
        Route::view('dashboard', 'admin.index')->name('dashboard'); //dashboard controller

        //MODUL BERITA
        Route::get('berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita'); //INDEX BERITA
        Route::get('berita-baru', [App\Http\Controllers\BeritaController::class, 'create'])->name('berita-baru'); //BUAT BERITA
        Route::post('berita-baru/store', [App\Http\Controllers\BeritaController::class, 'store'])->name('berita-baru-store'); //BUAT BERITA POST
        Route::get('berita-edit/{id}', [App\Http\Controllers\BeritaController::class, 'edit'])->name('berita-edit'); //EDIT BERITA
        Route::post('berita-edit/update/{id}', [App\Http\Controllers\BeritaController::class, 'update'])->name('berita-update'); //EDIT BERITA POST
        Route::get('berita-edit/delete/{id}', [App\Http\Controllers\BeritaController::class, 'destroy'])->name('berita-hapus'); //HAPUS BERITA

        //MODUL KOMUNIKASI
        Route::get('komunikasi-baru', [App\Http\Controllers\KomunikasiController::class, 'index'])->name('komunikasi'); //INDEX BELUM DIBALAS
        Route::get('komunikasi-arsip', [App\Http\Controllers\KomunikasiController::class, 'arsip'])->name('komunikasi-arsip'); //INDEX SUDAH DIBALAS
        Route::get('komunikasi/lihat/{id}', [App\Http\Controllers\KomunikasiController::class, 'edit'])->name('komunikasi-lihat'); //LIHAT DAN BALAS
        Route::delete('komunikasi/{id}', [App\Http\Controllers\KomunikasiController::class, 'destroy'])->name('komunikasi-hapus'); //HAPUS
        Route::post('komunikasi/balas/{id}', [App\Http\Controllers\KomunikasiController::class, 'update'])->name('komunikasi-dibalas'); //POST BALAS

        

        //MODUL PENDONOR
        Route::get('/pendonor', [App\Http\Controllers\PendonorController::class, 'index'])->name('pendonor'); 
        Route::get('/pendonor/addpendonor', [App\Http\Controllers\PendonorController::class, 'create'])->name('pendonor-addpendonor');
        Route::post('/pendonor/proses', [App\Http\Controllers\PendonorController::class, 'store'])->name('pendonor-proses');
        Route::get('/pendonor/editpendonor/{id}', [App\Http\Controllers\PendonorController::class, 'edit'])->name('pendonor-editpendonor'); //LIHAT DAN BALAS
        Route::get('/pendonor/destroy/{id}', [App\Http\Controllers\PendonorController::class, 'destroy'])->name('pendonor-destroy'); //HAPUS
        Route::post('/pendonor/update/{id}', [App\Http\Controllers\PendonorController::class, 'update'])->name('pendonor-update'); //POST BALAS

         //MODUL MCU
        Route::get('/mcu', [App\Http\Controllers\McuController::class, 'index'])->name('mcu'); 
        Route::get('/mcu/tambah-mcu', [App\Http\Controllers\McuController::class, 'create'])->name('mcu-tambah-mcu');
        Route::post('/mcu/proses', [App\Http\Controllers\McuController::class, 'store'])->name('mcu-proses');
        Route::get('/mcu/edit-mcu/{id}', [App\Http\Controllers\McuController::class, 'edit'])->name('mcu-edit-mcu'); //LIHAT DAN BALAS
        Route::get('/mcu/destroy/{id}', [App\Http\Controllers\McuController::class, 'destroy'])->name('mcu-destroy'); //HAPUS
        Route::post('/mcu/update/{id}', [App\Http\Controllers\McuController::class, 'update'])->name('mcu-update'); //POST BALAS



    });
});

Route::get('/registrasi-donor', [App\Http\Controllers\WilayahController::class, 'index'])->name('registrasi-donor');
Route::post('/kel', [App\Http\Controllers\WilayahController::class, 'store'])->name('kel');
Route::get('/kota', [App\Http\Controllers\WilayahController::class, 'loadData']);



        