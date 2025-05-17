<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function showKeranjang() {
        return view('keranjang.keranjang');
    }
}
