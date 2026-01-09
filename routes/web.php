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
// TODO: Resource routes untuk CRUD Pembayaran
// Route::resource('pembayaran', PembayaranController::class);
Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');