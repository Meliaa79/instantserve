<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::all();
        return view('lihat-jasa',compact("data"));
        // Select * from Post;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah-jasa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input
        // dd($request->all());
        $validated = $request->validate([
            'nama_layanan' => 'required',
            'kontak' => 'required',
            'alamat' => 'required',
            'image_url' => 'required|image|mimes:jpeg,jpg,png',
            'kategori' => 'in:UMKM,Sekolah,Rumah Tangga,Pengangkutan',
            'deskripsi_layanan' => 'required'
        ]);
    
        try {
            // Upload image
            $image = $request->file('image_url');
            $image->storeAs('public/posts', $image->hashName());
    
            // Create new post
            Post::create([
                'nama_layanan' => $request->nama_layanan,
                'kontak' => $request->kontak,
                'alamat' => $request->alamat,
                'image_url' => $image->hashName(),
                'alt'=> $image->getFilename(),
                'kategori' => $request->kategori,
                'deskripsi_layanan' => $request->deskripsi_layanan
            ]);
    
            return redirect()->route('post.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => 'Terjadi Kesalahan saat menyimpan data!']);
        }
    }
    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
