<?php

namespace App\Http\Controllers;

use App\Models\Beauty;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail_product($id)
    {
        $p = Beauty::find($id);
        $products = Beauty::orderBy('id', 'desc')->get();

        return view('product', compact('p', 'products'));
    }
}
