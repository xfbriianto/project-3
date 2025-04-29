<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    // Menampilkan form login khusus user
    public function showLoginForm()
    {
        return view('auth.user-login');
    }

    // Memproses login khusus user
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt login
        if (Auth::attempt($credentials)) {
            // Regenerate session
            $request->session()->regenerate();

            // Pastikan yang login adalah user dengan role='user'
            if (Auth::user()->role === 'user') {
                // Beri akses, arahkan ke dashboard user
                return redirect()->intended('/index');
            } else {
                // Jika ternyata admin (atau role lain), logout & beri pesan error
                Auth::logout();
                return redirect()->route('user.login')->withErrors([
                    'email' => 'Anda tidak memiliki akses sebagai user.',
                ]);
            }
        }

        // Login gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
}
