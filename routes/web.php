<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LokasiController;

Route::resource('/kuliner', KulinerController::class);
Route::resource('/kategori', KategoriController::class);
Route::resource('/lokasi', LokasiController::class);



Route::get('/kuliner', function () {
    return redirect()->route('kuliner.index');
});

Route::resource('/kuliner', KulinerController::class);
Route::get('/beranda', function () {
    return view('home');
});
Route::get('/menu', [KulinerController::class, 'menu'])->name('menu');
Route::get('/kuliner/{id}', [KulinerController::class, 'show'])->name('kuliner.show');
Route::get('/kontak', function () {
    return view('kontak');
});
