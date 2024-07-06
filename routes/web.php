<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/', [DataController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard', [DataController::class, 'dashboard'])->name('dashboard');
Route::get('/input-data', [DataController::class, 'inputData'])->name('input.data');
Route::get('/data-tabel', [DataController::class, 'dataTabel'])->name('data.tabel');

// Route untuk menyimpan data baru
Route::post('/tambah-data', [DataController::class, 'tambahData'])->name('tambah.data');
