<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\AdminPendaftarController; // <-- 1. Tambahkan import controller admin
use Illuminate\Support\Facades\Route;

// Mengalihkan halaman utama langsung ke halaman registrasi
Route::redirect('/', '/register');

// Rute dashboard tetap sama
Route::get('/dashboard', function () {
    return view('dashboard');
// 👇 Middleware 'verified' sudah ada secara default dari Breeze
})->middleware(['auth', 'verified'])->name('dashboard');

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


// 2. TAMBAHKAN BLOK INI UNTUK RUTE ADMIN
// ===================================================
Route::middleware(['auth', 'verified', 'is.admin'])->prefix('admin')->name('admin.')->group(function () {
    
    // Route untuk dashboard admin
    Route::get('/dashboard', function () {
        // Nanti kita akan buat view ini
        return view('admin.dashboard');
    })->name('dashboard');

    // Route untuk mengelola pendaftar
    Route::get('/pendaftar', [AdminPendaftarController::class, 'index'])->name('pendaftar.index');
    
    // Anda bisa menambahkan rute lain untuk admin di sini
    // Contoh: Route::get('/pendaftar/{id}', [AdminPendaftarController::class, 'show'])->name('pendaftar.show');

});
// ===================================================


require __DIR__.'/auth.php';
