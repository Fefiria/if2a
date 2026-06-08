<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\PriodeController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('login');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/main', function () {
    return view('main');
});

// Resource Routes
Route::middleware(['auth'])->group(function () {
    Route::resource('fakultas', FakultasController::class);
    Route::resource('periode', PeriodeController::class);
    Route::resource('priode', PriodeController::class);
    Route::resource('prodi', ProdiController::class);
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/mahasiswa', MahasiswaController::class);
});

require __DIR__.'/auth.php';
