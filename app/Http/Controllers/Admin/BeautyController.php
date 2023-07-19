<?php

namespace App\Http\Controllers\Admin;

use App\Models\Beauty;
use Illuminate\Http\Request;
use App\Models\CategoryBeauty;
use App\Http\Controllers\Controller;
use App\Models\Disease;
use Illuminate\Support\Facades\File;

class BeautyController extends Controller
{
    public function index()
    {
        $beauties = Beauty::orderBy('id', 'desc')->get();

        return view('dashboard.beauty.index', compact('beauties'));
    }

    public function create()
    {
        $categoryBeauties = CategoryBeauty::orderBy('nama_kategori', 'asc')->get();

        return view('dashboard.beauty.create', compact('categoryBeauties'));
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'category_beauty_id' => 'required|integer',
            'gambar_beauty' => 'required|image|file|max:5120|mimes:jpg,jpeg,png',
            'kode_beauty' => 'required|unique:beauties,kode_beauty',
            'nama_beauty' => 'required',
            'stok_beauty' => 'required',
            'harga_beauty' => 'required'
        ]);

        $extension = $request->file('gambar_beauty')->getClientOriginalExtension();
        $gambar_beauty = $request->nama_beauty .'-'. rand() .'.'. $extension;
        $path = $request->file('gambar_beauty')->storeAs('beauties', $gambar_beauty, 'public');

        $beauty = Beauty::create([
            'category_beauty_id' => $request->category_beauty_id,
            'gambar_beauty' => $gambar_beauty,
            'kode_beauty' => $request->kode_beauty,
            'nama_beauty' => $request->nama_beauty,
            'stok_beauty' => $request->stok_beauty,
            'harga_beauty' => $request->harga_beauty,
        ]);

        return redirect()->route('beauty.index')->with('status', 'Data Beauty Berhasil Di Tambahkan');
    }

    public function show($id)
    {
        $b = Beauty::find(decrypt($id));
        
        return view('dashboard.beauty.detail', compact('b'));
    }

    public function edit($id)
    {
        $b = Beauty::find(decrypt($id));
        $categoryBeauties = CategoryBeauty::orderBy('nama_kategori', 'asc')->get();

        return view('dashboard.beauty.edit', compact('b', 'categoryBeauties'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'category_beauty_id' => 'required|integer',
            'gambar_beauty' => 'nullable|image|file|max:5120|mimes:jpg,jpeg,png',
            'kode_beauty' => 'required',
            'nama_beauty' => 'required',
            'stok_beauty' => 'required',
            'harga_beauty' => 'required'
        ]);

        $beauty = Beauty::find(decrypt($id));

        if($request->file('gambar_beauty')) {
            $gambar_beautyOld = 'storage/beauties/'. $beauty->gambar_beauty;
            if(File::exists($gambar_beautyOld)) {
                File::delete($gambar_beautyOld);

                $extension = $request->file('gambar_beauty')->getClientOriginalExtension();
                $gambar_beauty = $request->nama_beauty .'-'. rand() .'.'. $extension;
                $path = $request->file('gambar_beauty')->storeAs('beauties', $gambar_beauty, 'public');
            }
        } else {
            $gambar_beauty = $beauty->gambar_beauty;
        }

        $beauty = Beauty::find(decrypt($id))->update([
            'category_beauty_id' => $request->category_beauty_id,
            'gambar_beauty' => $gambar_beauty,
            'kode_beauty' => $request->kode_beauty,
            'nama_beauty' => $request->nama_beauty,
            'stok_beauty' => $request->stok_beauty,
            'harga_beauty' => $request->harga_beauty,
        ]);

        return redirect()->route('beauty.index')->with('status', 'Data Beauty Berhasil Di Update');
    }

    public function destroy($id)
    {
        $beauty = Beauty::find(decrypt($id));
        $gambar_beautyOld = File::delete('storage/beauties/'. $beauty->gambar_beauty);
        $diseases = Disease::where('beauty_id', decrypt($id))->get();
        foreach ($diseases as $d) {
            $d->delete();
        }
        $beauty->delete();

        return redirect()->route('beauty.index')->with('status', 'Data Beauty Berhasil Di Hapus');
    }
}
