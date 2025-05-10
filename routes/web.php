<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('beranda.beranda');
});

Route::get('/produk/{kategori}', [App\Http\Controllers\ProdukController::class, 'index'])->name('produk.kategori');


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