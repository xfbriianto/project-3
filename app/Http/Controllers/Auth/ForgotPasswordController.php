<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; // untuk generate random
use Carbon\Carbon;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    /**
     * 1. Tampilkan Form Forgot Password
     */
    public function showForgotForm()
    {
        return view('auth.forgot-password');
    }

    /**
     * 2. Proses Email di Form Forgot Password
     *    - Generate OTP 4 digit
     *    - Simpan di tabel password_resets
     *    - (Opsional) Kirim email ke user
     *    - Redirect ke Halaman Get Your Code
     */
    public function processForgot(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ], [
            'email.exists' => 'Email tidak terdaftar.'
        ]);

        // Generate OTP 4 digit
        $otp = rand(1000, 9999);

        // Simpan / update ke tabel password_resets
        DB::table('password_resets')->updateOrInsert(
            ['email' => $request->email],
            [
                'token' => $otp,
                'created_at' => Carbon::now()
            ]
        );

        // (Opsional) Kirim email ke user, misal:
        // Mail::to($request->email)->send(new OtpMail($otp));

        // Simpan email di session agar bisa dipakai di step berikut
        $request->session()->put('reset_email', $request->email);

        // Arahkan ke halaman get-your-code
        return redirect()->route('get.your.code')->with('info', 'OTP telah dikirim ke email Anda.');
    }

    /**
     * 3. Tampilkan Form Get Your Code (OTP)
     */
    public function showOtpForm()
    {
        // Pastikan user sudah melewati step forgot password
        if (!session('reset_email')) {
            return redirect()->route('forgot.password')->withErrors(['email' => 'Silakan masukkan email terlebih dahulu.']);
        }

        return view('auth.get-your-code');
    }

    /**
     * 4. Verifikasi OTP
     *    - Cek kecocokan OTP di tabel password_resets
     *    - Jika valid, arahkan ke reset password
     */
    public function verifyOtp(Request $request)
    {
        // Validasi input 4 digit
        $request->validate([
            'otp1' => 'required|digits:1',
            'otp2' => 'required|digits:1',
            'otp3' => 'required|digits:1',
            'otp4' => 'required|digits:1',
        ]);

        $email = session('reset_email');
        if (!$email) {
            return redirect()->route('forgot.password')->withErrors(['email' => 'Session email tidak ditemukan.']);
        }

        // Gabungkan 4 digit jadi satu string
        $inputOtp = $request->otp1 . $request->otp2 . $request->otp3 . $request->otp4;

        // Cek di tabel password_resets
        $record = DB::table('password_resets')
            ->where('email', $email)
            ->first();

        if (!$record || $record->token !== $inputOtp) {
            return back()->withErrors(['otp' => 'Kode OTP salah atau sudah kadaluarsa.']);
        }

        // Jika valid, simpan info "OTP verified" ke session
        $request->session()->put('otp_verified', true);

        // Arahkan ke halaman reset password
        return redirect()->route('reset.password');
    }

    /**
     * 5. Tampilkan Form Reset Password (setelah OTP valid)
     */
    public function showResetForm()
    {

        return view('auth.reset-password');
    }

    /**
     * 6. Proses Reset Password
     */
    public function processReset(Request $request)
    {
        // Validasi password
        $request->validate([
            'password' => 'required|string|min:6|confirmed',
        ]);

        $email = session('reset_email');
        if (!$email || !session('otp_verified')) {
            return redirect()->route('forgot.password')->withErrors(['email' => 'Session tidak valid.']);
        }

        // Update password user
        User::where('email', $email)->update([
            'password' => Hash::make($request->password)
        ]);

        // Hapus session
        $request->session()->forget(['reset_email', 'otp_verified']);

        // (Opsional) Hapus token di password_resets
        DB::table('password_resets')->where('email', $email)->delete();

        // Redirect ke halaman login
        return redirect()->route('login')->with('success', 'Password berhasil direset! Silakan login dengan password baru.');
    }
}

