<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/layanan', function () {
    return view('layanan.index');
})->name('layanan');

Route::get('/artikel', function () {
    return view('artikel.index');
})->name('artikel');

Route::get('/berita', function () {
    return view('berita.index');
})->name('berita');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/login', [AuthController::class, 'formLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('/pendaftaran', PendaftaranController::class)->only(['create', 'store']);
