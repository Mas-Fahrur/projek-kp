<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Admin;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminReportController extends Controller
{
    public function downloadReport(Request $request)
    {
        // Ambil nama admin dari query
        $adminName = $request->query('admin');

        $admin = Admin::where('name', $adminName)->first();
        if (!$admin) {
            return response()->json(['message' => 'Hanya admin yang dapat mengakses laporan'], 403);
        }

        $transactions = Transaction::orderByDesc('paid_at')->get();

// Paksa decode agar products pasti jadi array
foreach ($transactions as $tx) {
    if (is_string($tx->products)) {
        $tx->products = json_decode($tx->products, true);
    }
}


        $pdf = Pdf::loadView('transactions', ['transactions' => $transactions]);

        return $pdf->download('laporan-transaksi.pdf');
    }
}
