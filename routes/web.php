<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelolaArtikelController;
use App\Http\Controllers\KelolaBeritaController;
use App\Http\Controllers\KelolaFAQController;
use App\Http\Controllers\KelolaPendaftaranController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/layanan', function () {
    return view('layanan.index');
})->name('layanan');

Route::resource('/artikel', ArtikelController::class)->only(['index', 'show']);
Route::resource('/berita', BeritaController::class)->only(['index', 'show']);
Route::get('/faq', [FAQController::class, 'index'])->name('faq');


Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/login', [AuthController::class, 'formLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('/pendaftaran', PendaftaranController::class)->only(['create', 'store']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/kelola-pendaftaran', KelolaPendaftaranController::class)->only(['index', 'show']);
    Route::get('/kelola-pendaftaran-export', [KelolaPendaftaranController::class, 'export'])->name('kelola-pendaftaran.export');
    Route::resource('/kelola-artikel', KelolaArtikelController::class)->except('show');
    Route::resource('/kelola-berita', KelolaBeritaController::class)->except('show');
    Route::resource('/kelola-FAQ', KelolaFAQController::class)->except('show');
});
