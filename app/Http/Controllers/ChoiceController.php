<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChoiceController extends Controller
{
    public function store(Request $request)
{
    // Validasi pilihan
    $request->validate([
        'choice' => 'required|in:1,2', // 1 untuk mencari jasa, 2 untuk memberikan jasa
    ]);

    // Simpan pilihan ke database untuk pengguna yang sedang login
    $user = Auth::user();
    $user->choice = $request->choice;
    $user->save();

    // Redirect berdasarkan pilihan
    if ($user->choice == 1) {
        return redirect()->route('kategori')->with('success', 'Selamat datang! Anda sekarang dapat mencari jasa.');
    } elseif ($user->choice == 2) {
        return redirect()->route('ktp.form')->with('success', 'Silakan verifikasi KTP untuk memberikan jasa.');
    }

    // Jika ada error, kembali ke halaman pilihan
    return back()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
}
}