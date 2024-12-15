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

    public function Search(Request $request)
    {
        // Validate the incoming search request
        $request->validate([
            'search' => 'required|string|min:1',  // Ensure search query has at least 1 character
        ]);

        // Retrieve the search query from the request
        $query = $request->input('search');

        // Perform the search with pagination (10 posts per page)
        $search = Post::where('nama_layanan', 'like', "%{$query}%")
            ->orWhere('kategori', 'like', "%{$query}%")
            ->paginate(10);  // Adjust number of items per page as necessary

        // Return the search results to the 'Search.search' view
        return view('Search.search', compact('search'));
    }
}