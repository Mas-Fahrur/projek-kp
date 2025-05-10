<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function userHistory(Request $request)
    {
        // Pastikan yang akses adalah admin
        $user = Auth::user();
        if (!$user || $user->role !== 'admin') {
            return response()->json(['message' => 'Hanya admin yang dapat melihat riwayat transaksi'], 403);
        }

        $validated = $request->validate([
            'name' => 'required|string'
        ]);

        $targetUser = User::where('name', $validated['name'])->first();
        if (!$targetUser) {
            return response()->json(['message' => 'User tidak ditemukan'], 404);
        }

        $transactions = Transaction::where('user_id', $targetUser->id)->orderByDesc('paid_at')->get();

        return response()->json([
            'message' => 'Riwayat transaksi ditemukan',
            'transactions' => $transactions
        ]);
    }
}
