<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Beauty;
use App\Models\CategoryBeauty;
use Illuminate\Http\Request;

class CategoryBeautyController extends Controller
{
    public function index()
    {
        $categoryBeauties = CategoryBeauty::orderBy('id', 'desc')->get();

        return view('dashboard.category-beauty.index', compact('categoryBeauties'));
    }

    public function create()
    {
        return view('dashboard.category-beauty.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_kategori' => 'required'
        ]);

        $categoryBeauty = CategoryBeauty::create($validate);

        return redirect()->route('category-beauty.index')->with('status', 'Data Kategori Beauty Berhasil Di Tambahkan');

    }

    public function edit($id)
    {
        $cb = CategoryBeauty::find(decrypt($id));

        return view('dashboard.category-beauty.edit', compact('cb'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama_kategori' => 'required'
        ]);

        $categoryBeauty = CategoryBeauty::find(decrypt($id))->update($validate);

        return redirect()->route('category-beauty.index')->with('status', 'Data Kategori Beauty Berhasil Di Update');
    }

    public function destroy($id)
    {
        $categoryBeauty = CategoryBeauty::find(decrypt($id));
        $beauties = Beauty::where('category_beauty_id', decrypt($id))->get();
        foreach ($beauties as $b) {
            $b->delete();
        }
        $categoryBeauty->delete();

        return redirect()->route('category-beauty.index')->with('status', 'Data Kategori Beauty Berhasil Di Hapus');
    }
}
