<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourController extends Controller
{
    public function pilihan()
    {
        return view('pilihan'); // Ensure this view file exists
    }
}
