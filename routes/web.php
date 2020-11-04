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
Route::view('/agenda-detail', 'user.agenda-detail')->name('agenda-detail');
Route::view('/informasi', 'user.informasi')->name('informasi'); //INFORMASI KEBUTUHAN DARAH DINAMIS
Route::view('/pengajuan-event-donor', 'user.pengajuan-event-donor')->name('pengajuan-event-donor');
Route::view('/registrasi-donor', 'user.registrasi-donor')->name('registrasi-donor');
Route::view('/donor-rhesus-negatif', 'user.donor-rhesus-negatif')->name('donor-rhesus-negatif');
Route::view('/komunikasi', 'user.komunikasi')->name('komunikasi');
Route::view('/hubungi-kami', 'user.hubungi-kami')->name('hubungi-kami');
Route::view('/faq', 'user.faq')->name('faq');

//ADMIN
Route::view('/admin', 'admin.index')->name('admin');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
