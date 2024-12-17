<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        
        // If the user is a service provider, show only their own services
        if ($user->choice == 2) {
            $data = Post::where('user_id', $user->id)->get();
        } else {
            // If the user is a service searcher, show all services
            $data = Post::all();
        }

        return view('lihat-jasa', compact('data'));

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
    // Validasi input
        // dd($request->all());
        public function store(Request $request)
{
    $validated = $request->validate([
        'nama_layanan' => 'required',
        'kontak' => 'required|numeric',
        'alamat' => 'required',
        'image_url' => 'nullable|image|mimes:jpeg,jpg,png',
        'kategori' => 'in:UMKM,Sekolah,Rumah Tangga,Pengangkutan',
        'deskripsi_layanan' => 'required'
    ]);

    try {
        $post = new Post;

        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $image->storeAs('public/posts', $image->hashName());
            $post->image_url = $image->hashName();
            $post->alt = $image->getFilename();
        }

        $post->nama_layanan = $request->nama_layanan;
        $post->kontak = $request->kontak;
        $post->alamat = $request->alamat;
        $post->kategori = $request->kategori;
        $post->deskripsi_layanan = $request->deskripsi_layanan;
        $post->user_id = Auth::id(); // Get the currently authenticated user's ID
        $post->save();

        return redirect()->route('post.index')->with(['success' => 'Data Berhasil Ditambahkan!']);
    } catch (\Exception $e) {
        return redirect()->back()->with(['error' => 'Terjadi Kesalahan saat menambahkan data!']);
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
        // Retrieve the post by ID
    $post = Post::findOrFail($id);
    
    // Pass the post data to the edit view
    return view('edit-jasa', compact('post'));  
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
        // Validasi input
        $validated = $request->validate([
            'nama_layanan' => 'required',
            'kontak' => 'required|numeric',
            'alamat' => 'required',
            'image_url' => 'nullable|image|mimes:jpeg,jpg,png',
            'kategori' => 'in:UMKM,Sekolah,Rumah Tangga,Pengangkutan',
            'deskripsi_layanan' => 'required'
        ]);
    
        try {
            // Find the post by ID
            $post = Post::findOrFail($id);
    
            // If a new image is uploaded, handle the image upload
            if ($request->hasFile('image_url')) {
                $image = $request->file('image_url');
                $image->storeAs('public/posts', $image->hashName());
                $post->image_url = $image->hashName();
                $post->alt = $image->getFilename();
            }
    
            // Update the post data
            $post->nama_layanan = $request->nama_layanan;
            $post->kontak = $request->kontak;
            $post->alamat = $request->alamat;
            $post->kategori = $request->kategori;
            $post->deskripsi_layanan = $request->deskripsi_layanan;
    
            // Save the updated post
            $post->save();
    
            // Redirect with success message
            return redirect()->route('post.index')->with(['success' => 'Data Berhasil Diperbarui!']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => 'Terjadi Kesalahan saat memperbarui data!']);
        }
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
