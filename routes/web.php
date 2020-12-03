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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::view('/cekriwayat', 'user.riwayat')->name('cekriwayat'); //DINAMIS
Route::view('/stok-darah','user.stok-darah')->name('stok-darah'); //DINAMIS
Route::view('/cekriwayat', 'user.riwayat')->name('riwayat'); //DINAMIS
Route::view('/profil', 'user.profil')->name('profil');

Route::get('/agenda', [App\Http\Controllers\HomeController::class, 'indexAgenda'])->name('agenda');
Route::get('/agenda/{id}', [App\Http\Controllers\HomeController::class, 'agendaDetail'])->name('agenda-detail');

Route::get('/berita', [App\Http\Controllers\HomeController::class, 'indexBerita'])->name('berita');
Route::get('/berita/read/{slug}', [App\Http\Controllers\HomeController::class, 'readBerita'])->name('read-berita');
Route::view('/informasi', 'user.informasi')->name('informasi'); //INFORMASI KEBUTUHAN DARAH DINAMIS
Route::get('/komunikasi', [App\Http\Controllers\KomunikasiController::class, 'create'])->name('komunikasi');
Route::post('/komunikasi', [App\Http\Controllers\KomunikasiController::class, 'store']);

//Route::view('/pengajuan-event-donor', 'user.pengajuan-event-donor')->name('pengajuan-event-donor'); //DINAMIS
Route::get('/pengajuan-event-donor', [App\Http\Controllers\HomeController::class, 'formAgenda'])->name('pengajuan-event-donor');
Route::post('/kel', [App\Http\Controllers\HomeController::class, 'store'])->name('kel');
Route::get('/kota', [App\Http\Controllers\HomeController::class, 'loadData']);
Route::post('agenda/store', [App\Http\Controllers\AgendaController::class, 'store'])->name('agenda-store');

Route::get('/cek', [App\Http\Controllers\HomeController::class, 'cek']);

Route::view('/donor-rhesus-negatif', 'user.donor-rhesus-negatif')->name('donor-rhesus-negatif'); //DINAMIS
Route::view('/hubungi-kami', 'user.hubungi-kami')->name('hubungi-kami');
Route::view('/faq', 'user.faq')->name('faq');

//ADMIN
Auth::routes();
Route::group(['middleware' => 'auth'], function(){
    Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => 'auth' ], function () {
        Route::view('dashboard', 'admin.index')->name('dashboard'); //dashboard controller
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

Route::get('/registrasi-donor', [App\Http\Controllers\WilayahController::class, 'index'])->name('registrasi-donor');
/* Route::post('/kel', [App\Http\Controllers\WilayahController::class, 'store'])->name('kel');
Route::get('/kota', [App\Http\Controllers\WilayahController::class, 'loadData']); */