<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PesanSaranController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('service', ServiceController::class);
Route::resource('pesansaran', PesanSaranController::class);
Route::resource('about', AboutController::class);


// Route untuk dashboard dengan middleware auth dan verified
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk pesan_saran dengan middleware auth
Route::middleware('auth')->group(function () {
    Route::resource('pesan_saran', PesanSaranController::class)
        ->only(['index', 'store', 'edit', 'update', 'destroy']);
});

// Route untuk profile dengan middleware auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Mengimpor routing autentikasi bawaan
require __DIR__ . '/auth.php';
