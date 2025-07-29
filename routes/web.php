<?php

use App\Http\Controllers\AlatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RuanganController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/alat', [AlatController::class, 'index']);
Route::get('/ruangan', [RuanganController::class, 'index']);
Route::middleware(['auth'])->group(function () {
    Route::post('/peminjaman/alat', [AlatController::class, 'pinjam']);
    Route::post('/peminjaman/ruangan', [RuanganController::class, 'pinjam']);
});

require __DIR__ . '/auth.php';