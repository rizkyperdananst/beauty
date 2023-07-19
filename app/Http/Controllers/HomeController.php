<?php

namespace App\Http\Controllers;

use App\Models\Beauty;
use App\Models\Disease;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Beauty::orderBy('id', 'desc')->get();
        $diseases = Disease::orderBy('id', 'desc')->get();

        return view('home', compact('products', 'diseases'));
    }
}
