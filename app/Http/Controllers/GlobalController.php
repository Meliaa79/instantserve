<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\Post;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class GlobalController extends Controller
{
    public function homepage() {
        $data = Post::all();
        return view('homepage', compact('data'));
    }

    public function Search(SearchRequest $request)
{
    $request->validate([
        'search' => 'required|string|min:1',
    ]);

    $query = $request->input('search');

    $search = Post::where('nama_layanan', 'like', "%{$query}%")
        ->orWhere('kategori', 'like', "%{$query}%")
        ->paginate();

    return view('Search.search', compact('search'));
}
    
}
