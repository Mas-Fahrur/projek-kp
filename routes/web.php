<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProfilController;

Route::get('/', function () {
    return view('beranda.beranda');
})->name('beranda');

Route::get('/produk/{kategori}', [App\Http\Controllers\ProductController::class, 'index'])->name('produk.kategori');

// Keranjang
Route::get('/keranjang', [KeranjangController::class, 'showKeranjang'])->name('keranjang');

//Profil
Route::get('/profil', [ProfilController::class, 'showProfil'])->name('profil');

// Optional: Login tetap boleh ada
Route::post('/login', [AuthController::class, 'login']);

// Product routes (tanpa middleware)
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products', [ProductController::class, 'index']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

// Cart routes (tanpa middleware)
Route::post('/cart', [CartController::class, 'addToCart']);
Route::post('/checkout', [CartController::class, 'checkout']);

Route::get('/transaction/receipt/{nama}', [ReceiptController::class, 'printReceipt'])->name('transaction.receipt');
Route::get('/admin/reports/transactions', [AdminController::class, 'transactionReport'])->name('admin.transactionReport');