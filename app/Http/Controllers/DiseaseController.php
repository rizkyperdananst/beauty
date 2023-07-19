<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    public function detail_penyakit($id)
    {
        $d = Disease::find($id);
        $diseases = Disease::orderBy('id', 'desc')->get();

        return view('disease', compact('d', 'diseases'));
    }
}
