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
Route::view('/', 'user.index')->name('index');
Route::view('/profil', 'user.profil')->name('profil');
Route::view('/agenda', 'user.agenda')->name('agenda');
Route::view('/manfaat-donor', 'user.manfaat-donor')->name('manfaat-donor');
Route::view('/prosedur-donor', 'user.prosedur-donor')->name('prosedur-donor');
Route::view('/prosedur-permintaan-darah', 'user.prosedur-permintaan-darah')->name('prosedur-permintaan-darah');
Route::view('/layanan', 'user.layanan')->name('layanan');
Route::view('/permintaan-mobil-unit-donor', 'user.permintaan-mobil-donor')->name('permintaan-mobil-donor');
Route::view('/registrasi-donor', 'user.registrasi-donor')->name('registrasi-donor');
Route::view('/donor-rhesus-negatif', 'user.donor-rhesus-negatif')->name('donor-rhesus-negatif');
Route::view('/komunikasi', 'user.komunikasi')->name('komunikasi');
Route::view('/pmi-indramayu', 'user.pmi-indramayu')->name('pmi-indramayu');
Route::view('/layanan-pasien', 'user.layanan-pasien')->name('layanan-pasien');
Route::view('/faq', 'user.faq')->name('faq');
