<?php

// KategoriController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCategory; // Model untuk menyimpan kategori user

class KategoriController extends Controller
{
    public function submit(Request $request)
    {
        // Validasi jika kategori dipilih
        $request->validate([
            'kategori' => 'required|string',
        ]);

        // Simpan kategori ke database
        $userCategory = new UserCategory();
        $userCategory->user_id = auth()->user()->id; // Pastikan pengguna sudah login
        $userCategory->kategori = $request->kategori;
        $userCategory->save();

        // Redirect kembali ke halaman dengan pesan sukses
        return redirect()->route('homepage')->with('success', 'Kategori berhasil dipilih!');
    }

    public function index()
    {
        // Menampilkan halaman kategori, misalnya
        return view('kategori');
    }

    public function giveService()
    {
        // Menampilkan halaman untuk memberi jasa, misalnya
        return view('give_service');
    }
}


