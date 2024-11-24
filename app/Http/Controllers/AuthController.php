<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showSignupForm()
    {
        return view('signup');
    }

    public function signup(Request $request)
{
    try {
        // Validasi data signup, memastikan password dan konfirmasi password cocok
        $request->validate([
            'full_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // memastikan password dan password_confirmation cocok
        
        ]);

        \Log::info('Validation passed');

        // Buat user baru
        $user = User::create([
            'full_name' => $request->full_name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password), // simpan password yang sudah di-hash
        ]);

        \Log::info('User created:', ['user_id' => $user->id]);

        // Login user setelah signup
        auth()->login($user);

        // Tandai bahwa user berasal dari signup
        session(['from_signup' => true]);

        // Log session state setelah signup
        \Log::info('Session after signup:', session()->all());

        // Redirect ke halaman pilihan
        return redirect()->route('pilihan')->with('success', 'Sign-up berhasil.');
    } catch (\Illuminate\Validation\ValidationException $e) {
        return back()->withErrors($e->validator->errors())->withInput();
    } catch (\Exception $e) {
        \Log::error('Signup error:', ['message' => $e->getMessage()]);
        return back()->with('error', 'Terjadi kesalahan. Coba lagi.');
    }
    

}



public function login(Request $request)
{
    // Validasi data login
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    // Cari user berdasarkan username
    $user = User::where('username', $request->username)->first();

    // Cek apakah user ditemukan
    if (!$user) {
        return back()->with('error', 'Username tidak ditemukan.');
    }

    // Verifikasi password
    if (!Hash::check($request->password, $user->password)) {
        return back()->with('error', 'Password salah.');
    }

    // Login berhasil
    auth()->login($user);

    // Arahkan pengguna berdasarkan nilai `choice`
    if ($user->choice == 1) {
        return redirect()->route('homepage')->with('success', 'Login berhasil.');
    } elseif ($user->choice == 2) {
        return redirect()->route('dashboard')->with('success', 'Login berhasil.');
    }

    // Jika `choice` belum diatur, arahkan ke halaman pilihan
    return redirect()->route('pilihan')->with('info', 'Silakan pilih tujuan Anda.');
}


public function pilihan()
{
    return view('pilihan'); // Pastikan view ini ada
}


}
