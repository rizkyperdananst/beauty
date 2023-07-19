<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Beauty;
use App\Models\Disease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DiseaseController extends Controller
{
    public function index()
    {
        $diseases = Disease::orderBy('id', 'desc')->get();

        return view('dashboard.disease.index', compact('diseases'));
    }

    public function create()
    {
        $beauties = Beauty::orderBy('nama_beauty', 'asc')->get();

        return view('dashboard.disease.create', compact('beauties'));
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'gambar_penyakit' => 'required|image|file|max:5120|mimes:jpg,jpeg,png',
            'nama_penyakit' => 'required',
            'deskripsi_penyakit' => 'required',
            'beauty_id' => 'required|integer',
        ]);

        $nama_penyakitReplace = str_replace(' ', '', $request->nama_penyakit);
        $nama_penyakit = strtolower($nama_penyakitReplace);

        $extension = $request->file('gambar_penyakit')->getClientOriginalExtension();
        $namaGambarPenyakit = $nama_penyakit .'-'. rand() .'.'. $extension;
        $path = $request->file('gambar_penyakit')->storeAs('diseases', $namaGambarPenyakit, 'public');

        $disease = Disease::create([
            'gambar_penyakit' => $namaGambarPenyakit,
            'nama_penyakit' => $request->nama_penyakit,
            'deskripsi_penyakit' => $request->deskripsi_penyakit,
            'beauty_id' => $request->beauty_id,
        ]);

        return redirect()->route('disease.index')->with('status', 'Data Penyakit Berhasil Di Tambahkan');
    }

    public function show($id)
    {
        $d = Disease::find($id);

        return view('dashboard.disease.detail', compact('d'));
    }

    public function edit($id)
    {
        $d = Disease::find($id);
        $beauties = Beauty::orderBy('nama_beauty', 'asc')->get();

        return view('dashboard.disease.edit', compact('d', 'beauties'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'gambar_penyakit' => 'nullable|image|file|max:5120|mimes:jpg,jpeg,png',
            'nama_penyakit' => 'required',
            'deskripsi_penyakit' => 'required',
            'beauty_id' => 'required|integer',
        ]);

        $nama_penyakitReplace = str_replace(' ', '', $request->nama_penyakit);
        $nama_penyakit = strtolower($nama_penyakitReplace);

        $disease = Disease::find($id);

        if($request->file('gambar_penyakit')) {
            $namaGambarPenyakitLama = 'storage/diseases/'. $disease->gambar_penyakit;
            if(File::exists($namaGambarPenyakitLama)) {
                File::delete($namaGambarPenyakitLama);

                $extension = $request->file('gambar_penyakit')->getClientOriginalExtension();
                $namaGambarPenyakit = $nama_penyakit .'-'. rand() .'.'. $extension;
                $path = $request->file('gambar_penyakit')->storeAs('diseases', $namaGambarPenyakit, 'public');
            }
        } else {
            $namaGambarPenyakit = $disease->gambar_penyakit;
        }

        $disease = Disease::find($id)->update([
            'gambar_penyakit' => $namaGambarPenyakit,
            'nama_penyakit' => $request->nama_penyakit,
            'deskripsi_penyakit' => $request->deskripsi_penyakit,
            'beauty_id' => $request->beauty_id,
        ]);

        return redirect()->route('disease.index')->with('status', 'Data Penyakit Berhasil Di Update');
    }

    public function destroy($id)
    {
        $disease = Disease::find($id);
        $namaGambarPenyakitLama = File::delete('storage/diseases/'. $disease->gambar_penyakit);
        $disease->delete();
        
        return redirect()->route('disease.index')->with('status', 'Data Penyakit Berhasil Di Hapus');
    }
}
