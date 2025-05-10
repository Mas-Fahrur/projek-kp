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

        if (!array_key_exists($kategori, $items)) {
            abort(404);
        }

        // Kirim data ke view
        return view('produk.produk', [
            'kategori' => $kategori,
            'items' => $items[$kategori]
        ]);
    }
}
