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
Route::get('/cek', [App\Http\Controllers\HomeController::class, 'cek']);
//USER
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/riwayat-donor', [App\Http\Controllers\HomeController::class, 'cekRiwayat'])->name('cek-riwayat');
Route::view('/stok-darah','user.stok-darah')->name('stok-darah');
Route::view('/profil', 'user.profil')->name('profil');
Route::get('/agenda', [App\Http\Controllers\HomeController::class, 'indexAgenda'])->name('agenda');
Route::get('/agenda/cari', [App\Http\Controllers\HomeController::class, 'search'])->name('agenda-cari');
Route::get('/agenda/{id}', [App\Http\Controllers\HomeController::class, 'agendaDetail'])->name('agenda-detail');
Route::get('/berita', [App\Http\Controllers\HomeController::class, 'indexBerita'])->name('berita');
Route::get('/berita/read/{slug}', [App\Http\Controllers\HomeController::class, 'readBerita'])->name('read-berita');
Route::view('/informasi', 'user.informasi')->name('informasi');
Route::get('/komunikasi', [App\Http\Controllers\KomunikasiController::class, 'create'])->name('komunikasi');
Route::post('/komunikasi', [App\Http\Controllers\KomunikasiController::class, 'store']);
//PENGAJUAN AGENDA
Route::get('/pengajuan-event-donor', [App\Http\Controllers\HomeController::class, 'formAgenda'])->name('pengajuan-event-donor');
Route::post('/kel', [App\Http\Controllers\HomeController::class, 'store'])->name('kel');
Route::get('/kota', [App\Http\Controllers\HomeController::class, 'loadData']);
Route::post('agenda/store', [App\Http\Controllers\AgendaController::class, 'store'])->name('agenda-store');
//REGISTRASI DONOR
Route::get('/registrasi-donor', [App\Http\Controllers\RegistrasiController::class, 'create'])->name('registrasi-donor');
Route::post('/registrasi/store', [App\Http\Controllers\RegistrasiController::class, 'store'])->name('registrasi-store');
//
Route::view('/donor-rhesus-negatif', 'user.donor-rhesus-negatif')->name('donor-rhesus-negatif'); //DINAMIS
Route::view('/hubungi-kami', 'user.hubungi-kami')->name('hubungi-kami');
Route::view('/faq', 'user.faq')->name('faq');

//ADMIN
Auth::routes();
Route::group(['middleware' => 'auth'], function(){
    Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => 'auth' ], function () {
        Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
        //MODUL REGISTRASI DONOR
        Route::get('registrasi', [App\Http\Controllers\RegistrasiController::class, 'index'])->name('registrasi'); //INDEX REGISTRASI DONOR
        Route::get('registrasi/detail/{id}', [App\Http\Controllers\RegistrasiController::class, 'show'])->name('registrasi-detail'); //INDEX REGISTRASI DONOR
        Route::delete('registrasi/hapus/{id}', [App\Http\Controllers\RegistrasiController::class, 'destroy'])->name('registrasi-hapus'); //HAPUS REGISTRASI
        //MODUL MCU
        Route::get('mcu/proses/{id}', [App\Http\Controllers\McuController::class, 'create'])->name('mcu-proses'); //BUATH MCU / PROSES MCU
        Route::post('mcu/store', [App\Http\Controllers\McuController::class, 'store'])->name('mcu-store'); //STORE PROSES MCU
        Route::get('mcu', [App\Http\Controllers\McuController::class, 'index'])->name('mcu'); //INDEX MCU
        Route::get('mcu/detail/{id}', [App\Http\Controllers\McuController::class, 'show'])->name('mcu-detail'); //DETAIL MCU
        //MODUL PENDONOR
        Route::get('pendonor/proses/{id}', [App\Http\Controllers\PendonorController::class, 'store'])->name('pendonor-proses'); //INDEX PENDONOR
        Route::get('pendonor', [App\Http\Controllers\PendonorController::class, 'index'])->name('pendonor'); //INDEX PENDONOR
        Route::get('pendonor/detail/{id}', [App\Http\Controllers\PendonorController::class, 'show'])->name('pendonor-detail'); //UBAH STATUS DONOR
        Route::post('pendonor/{id}', [App\Http\Controllers\PendonorController::class, 'update'])->name('pendonor-update'); //UBAH STATUS DONOR POST
        Route::delete('pendonor/hapus/{id}', [App\Http\Controllers\PendonorController::class, 'destroy'])->name('pendonor-hapus'); //HAPUS DONOR
        //MODUL AGENDA
        Route::get('agenda', [App\Http\Controllers\AgendaController::class, 'index'])->name('agenda'); //INDEX PENGAJUAN AGENDA
        Route::get('agenda/detail/{id}', [App\Http\Controllers\AgendaController::class, 'show'])->name('agenda-detail'); //DETAIL AGENDA
        Route::post('/kel', [App\Http\Controllers\AgendaController::class, 'send'])->name('kel');
        Route::get('/kota', [App\Http\Controllers\AgendaController::class, 'loadData']);
        Route::get('agenda-jadwal', [App\Http\Controllers\AgendaController::class, 'indexJadwal'])->name('agenda-jadwal'); //INDEX JADWAL AGENDA
        Route::get('agenda-jadwal/{id}', [App\Http\Controllers\AgendaController::class, 'edit'])->name('agenda-edit'); //INDEX JADWAL AGENDA
        Route::delete('agenda/delete/{id}', [App\Http\Controllers\AgendaController::class, 'destroy'])->name('agenda-hapus'); //HAPUS AGENDA
        Route::get('agenda/setuju/{id}', [App\Http\Controllers\AgendaController::class, 'setuju'])->name('agenda-setuju'); //SETUJU AGENDA
        Route::get('agenda/tolak/{id}', [App\Http\Controllers\AgendaController::class, 'tolak'])->name('agenda-tolak'); //TOLAK AGENDA
        Route::get('agenda/tambah', [App\Http\Controllers\AgendaController::class, 'create'])->name('agenda-tambah'); //TAMBAH AGENDA
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
    });
});