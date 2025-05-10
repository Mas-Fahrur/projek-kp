<?php
// File: app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function transactionReport()
    {
        // Ambil semua transaksi atau filter sesuai kebutuhan
        $transactions = Transaction::all();

        return view('admin.reports.transaction', compact('transactions'));
    }
}
