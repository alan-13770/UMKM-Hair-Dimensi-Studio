<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;


Route::resource('service', ServiceController::class);
Route::get('/services/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('/services', [ServiceController::class, 'store'])->name('service.store');
Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('service.edit');
Route::put('/services/{service}', [ServiceController::class, 'update'])->name('service.update');
Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('service.destroy');
