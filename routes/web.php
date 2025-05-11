<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::prefix('tentang-kami/')->group(function () {
    Route::get('profil', function () {
        return view('tentang-kami.profil');
    })->name('profil');
    Route::get('sejarah', function () {
        return view('tentang-kami.sejarah');
    })->name('sejarah');
});

Route::get('/faq', function(){
    return view('faq');
})->name('faq');

Route::get('/kontak', function(){
    return view('kontak');
})->name('kontak');
