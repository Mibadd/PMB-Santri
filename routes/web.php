<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

// Mengalihkan halaman utama langsung ke halaman registrasi
Route::redirect('/', '/login');

// Rute dashboard tetap sama
Route::get('/dashboard', function () {
    return view('dashboard');
// 👇 Middleware 'verified' sudah ada secara default dari Breeze
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('role:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard'); // Arahkan ke view dashboard admin
    })->name('dashboard');
    // Tambahkan rute admin lainnya di sini
});

// Grup rute yang memerlukan login
Route::middleware('auth')->group(function () {
    // Rute profil yang sudah ada
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rute pendaftaran yang benar
    Route::get('/pendaftaran', [PendaftaranController::class, 'create'])->name('pendaftaran.create');
    Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
});



require __DIR__.'/auth.php';
