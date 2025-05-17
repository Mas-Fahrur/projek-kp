<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login_admin');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Cari email admon
        $admin = Admin::where('email', $request->email)->first();

        // cek
        if (!$admin || !Hash::check('password', $request->password)) {
            return back()->withErrors([
                'email' => 'Email atau password salah',
            ]);
        }

        return redirect()->intended('/admin/dashboard');
    }
}
