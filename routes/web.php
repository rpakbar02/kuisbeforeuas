<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\KontrakSewaController;
use App\Http\Controllers\PembayaranController;
// TODO: Import controllers yang sudah dibuat

// TODO: Route untuk Dashboard (halaman utama)
Route::get('/', function () {
    return view('dashboard.index');
});

// TODO: Resource routes untuk CRUD Kamar
// Route::resource('kamar', KamarController::class);
Route::get('/kamar', [KamarController::class, 'index'])->name('kamar.index');
// TODO: Resource routes untuk CRUD Penyewa
// Route::resource('penyewa', PenyewaController::class);
Route::get('/penyewa', [PenyewaController::class, 'index'])->name('penyewa.index');
// TODO: Resource routes untuk CRUD Kontrak Sewa
// Route::resource('kontrak-sewa', KontrakSewaController::class);
Route::get('/kontrak-sewa', [KontrakSewaController::class, 'index'])->name('kontrak-sewa.index');
Route::get('/kontrak-sewa/hapus/{id}', [KontrakSewaController::class, 'destroy'])->name('kontrak-sewa.destroy');
Route::delete('/kontrak-sewa/hapus/{id}', [KontrakSewaController::class, 'destroy'])->name('kontrak-sewa.destroy');
Route::get('/kontrak-sewa/create', [KontrakSewaController::class, 'create'])->name('kontrak-sewa.create');
Route::get('/kontrak-sewa/{id}', [KontrakSewaController::class, 'show'])->name('kontrak-sewa.show');
Route::post('/kontrak-sewa/create', [KontrakSewaController::class, 'store'])->name('KontrakSewa.store');
Route::patch('/kontrak-sewa/{id}', [KontrakSewaController::class, 'update'])->name('kontrak-sewa.update');

// TODO: Resource routes untuk CRUD Pembayaran
// Route::resource('pembayaran', PembayaranController::class);
Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');