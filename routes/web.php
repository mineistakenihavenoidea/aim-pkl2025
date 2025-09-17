<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

Route::get('/home', function () {
    return view('home'); // file: resources/views/home.blade.php
})->name('home');



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');
Route::get('/produk', [PageController::class, 'produk'])->name('produk');
Route::get('/berita', [PageController::class, 'berita'])->name('berita');
Route::get('/interaksi', [PageController::class, 'interaksi'])->name('interaksi');








require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
