<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function show($kategori)
    {
        // Data produk bisa diambil dari database, ini contoh statis dulu
        $items = [
            'man' => ['Kemeja Batik Pria', 'Setelan Batik Laki-laki', 'Setelan Batik Wanita'],
            'women' => ['Dress Batik Wanita', 'Blouse Batik'],
            'couple' => ['Set Couple Batik', 'Kemeja & Dress Couple'],
            'sarung' => ['Sarung Batik Premium', 'Sarung Batik Sutra'],
            'bahan' => ['Kain Batik Tulis', 'Kain Batik Cap']
        ];

        // ✅ Ganti $produk jadi $items di sini
        if (!array_key_exists($kategori, $items)) {
            abort(404); // Jika tidak ditemukan, tampilkan 404
        }

        // Kirim data ke view
        return view('produk', [
            'kategori' => $kategori,
            'items' => $produk[$kategori]
        ]);
    }
}
