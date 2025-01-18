<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\GaleripangkasController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\ReservasiController;
use App\Models\galeriPangkas;

Route::get('/', [UserController::class, 'index'])->name('adminhome');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//auth
// routes/web.php


// Halaman yang hanya dapat diakses oleh pengguna yang sudah login
Route::middleware('auth')->group(function () {
    // Rute untuk halaman dashboard
    Route::get('/dashboard', function () {
        return view('dashboard'); // Pastikan file dashboard.blade.php ada di folder resources/views
    })->name('dashboard');

    // Rute untuk Galeri Pangkas
    Route::resource('galeripangkas', GaleriPangkasController::class);

    // Rute untuk Service
    Route::resource('service', ServiceController::class);

    // Rute untuk About Us
    Route::resource('aboutus', AboutUsController::class);


    // Rute untuk Hero Section
    Route::resource('hero', HeroSectionController::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::resource('testimoni', TestimoniController::class);


// In routes/web.php
Route::post('/testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');



// UserController Routes

// Route for listing all data on the homepage
Route::get('/adminhome', [UserController::class, 'index'])->name('adminhome');




// Menampilkan daftar About Us
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus.index');

// Menampilkan form untuk menambah About Us
Route::get('/aboutus/create', [AboutUsController::class, 'create'])->name('aboutus.create');

// Menyimpan data About Us yang baru
Route::post('/aboutus', [AboutUsController::class, 'store'])->name('aboutus.store');

// Menampilkan form untuk mengedit About Us
Route::get('/aboutus/{aboutus}/edit', [AboutUsController::class, 'edit'])->name('aboutus.edit');

// Mengupdate data About Us yang sudah ada
Route::put('/aboutus/{aboutus}', [AboutUsController::class, 'update'])->name('aboutus.update');

// Menghapus data About Us
Route::delete('/aboutus/{aboutus}', [AboutUsController::class, 'destroy'])->name('aboutus.destroy');

// Route::resource('homedashboard', AboutUsController::class);

// Route untuk homedashboard
Route::get('/homedashboard', function () {
    // Ambil data dari AboutUs dan Service
    $aboutus = \App\Models\AboutUs::all();
    $services = \App\Models\Service::all();

    // Kirim data ke view homedashboard
    return view('homedashboard', compact('aboutus', 'services'));
})->name('homedashboard');

// Routes for handling services
// Routes for handling services
Route::resource('service', ServiceController::class);

Route::get('/aboutus', function () {
    // Ambil data dari AboutUs
    $aboutus = \App\Models\AboutUs::all();

    // Kirim data ke view aboutus.index
    return view('aboutus.index', compact('aboutus'));
})->name('index');

Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus.index');

Route::get('/service', function () {
    $services = \App\Models\Service::all();
    return view('service.index', compact('services'));
})->name('index');

Route::get('/service', [ServiceController::class, 'index'])->name('service.index');


//HeroSection
Route::get('/hero', function () {
    $services = \App\Models\heroSection::all();
    return view('hero.index', compact('hero'));
})->name('index');

Route::get('/hero', [HeroSectionController::class, 'index'])->name('hero.index');

Route::resource('hero', HeroSectionController::class);

Route::get('/hero', [HeroSectionController::class, 'index'])->name('hero.index');

// Menampilkan form untuk menambah Hero Section
Route::get('/hero/create', [HeroSectionController::class, 'create'])->name('hero.create');

// Menyimpan data Hero Section yang baru
Route::post('/hero', [HeroSectionController::class, 'store'])->name('hero.store');

// Menampilkan form untuk mengedit Hero Section
Route::get('/hero/{hero}/edit', [HeroSectionController::class, 'edit'])->name('hero.edit');

// Mengupdate data Hero Section yang sudah ada
Route::put('/hero/{hero}', [HeroSectionController::class, 'update'])->name('hero.update');
Route::put('hero/{hero}', [HeroSectionController::class, 'update'])->name('hero.update');



// Menghapus data Hero Section
Route::delete('/hero/{hero}', [HeroSectionController::class, 'destroy'])->name('hero.destroy');
Route::get('/hero/{hero}/edit', [HeroSectionController::class, 'edit'])->name('hero.edit');
Route::put('/hero/{hero}', [HeroSectionController::class, 'update'])->name('hero.update');
Route::delete('/hero/{hero}', [HeroSectionController::class, 'destroy'])->name('hero.destroy');






//galeripangkas


Route::resource('galeripangkas', GaleripangkasController::class);
Route::get('/galeripangkas', [GaleripangkasController::class, 'index'])->name('galeripangkas.index');
Route::model('galeripangkas', galeriPangkas::class);
Route::put('/galeripangkas/{galeripangkas}', [GaleriPangkasController::class, 'update'])->name('galeripangkas.update');
Route::put('galeripangkas/{galeripangkas}', [GaleripangkasController::class, 'update'])->name('galeripangkas.update');
Route::put('galeripangkas/{galeripangkas}', [GaleripangkasController::class, 'update'])->name('galeripangkas.update');


//informasi


Route::resource('informasi', InformasiController::class);



//testimoni user
Route::get('/testimoni/create', function () {
    return view('testimoni.create');
})->name('testimoni.create');

// Menyimpan testimoni (post)
Route::post('/testimoni', [UserController::class, 'storeTestimoni'])->name('testimoni.store');
// Menambahkan testimoni tanpa login
Route::post('/testimoni', [UserController::class, 'storeTestimoni'])->name('storeTestimoni');


// Rute untuk menyimpan testimoni
Route::post('/testimoni', [UserController::class, 'storeTestimoni'])->name('storeTestimoni');

// Rute untuk menampilkan halaman utama (adminhome)
Route::get('/adminhome', [UserController::class, 'index'])->name('adminhome');

// Rute untuk menyimpan testimoni
Route::post('/testimoni', [UserController::class, 'storeTestimoni'])->name('storeTestimoni');

// Menampilkan form reservasi


// Menyimpan data reservasi
// routes/web.php
Route::get('/reservasi/create', [UserController::class, 'createReservasi'])->name('reservasi.create');
Route::post('/reservasi', [UserController::class, 'storeReservasi'])->name('storeReservasi');

Route::get('/reservasi', [ReservasiController::class, 'index'])->name('dashboardreservasi');
Route::get('/dashboard', [ReservasiController::class, 'showDashboard'])->name('dashboard');

Route::get('/adminhome', [TestimoniController::class, 'showAdminHome'])->name('adminhome');

require __DIR__ . '/auth.php';
