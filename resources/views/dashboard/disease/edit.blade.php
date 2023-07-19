@extends('layouts.dashboard')
@section('title', 'Admin | Edit Penyakit')
    
@section('content')
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Edit Penyakit</h4>
               </div>
               <div class="card-body">
                    <form action="{{ route('disease.update', $d->id) }}" method="POST" enctype="multipart/form-data">
                         @csrf
                         @method('put')
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="gambar_penyakit" class="form-label">Gambar Penyakit</label>
                                   <input type="file" name="gambar_penyakit" id="gambar_penyakit" class="form-control @error('gambar_penyakit') is-invalid @enderror">
                                   @error('gambar_penyakit')
                                       <div class="alert alert-danger mt-2 mb-2 p-">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="nama_penyakit" class="form-label">Nama Penyakit</label>
                                   <input type="text" name="nama_penyakit" value="{{ $d->nama_penyakit }}" id="nama_penyakit" class="form-control @error('nama_penyakit') is-invalid @enderror" placeholder="masukkan nama penyakit">
                                   @error('nama_penyakit')
                                       <div class="alert alert-danger mt-2 mb-2 p-">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <label for="deskripsi_penyakit" class="form-label">Deskripsi Penyakit</label>
                                   <textarea name="deskripsi_penyakit" id="deskripsi_penyakit" cols="30" rows="5" class="form-control @error('deskripsi_penyakit') is-invalid @enderror" placeholder="masukkan deskripsi penyakit">{{ $d->deskripsi_penyakit }}</textarea>
                                   @error('deskripsi_penyakit')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <label for="beauty_id" class="form-label">Product Beauty Rekomendasi</label>
                                   <select name="beauty_id" id="beauty_id" class="form-select @error('beauty_id') is-invalid @enderror">
                                        <option selected hidden>Pilih Product Rekomendasi</option>
                                        @foreach ($beauties as $b)
                                             @if($d->beauty_id == $b->id)
                                                  <option value="{{ $b->id }}" selected>{{ $b->nama_beauty }}</option>
                                             @else
                                                  <option value="{{ $b->id }}">{{ $b->nama_beauty }}</option>
                                             @endif
                                        @endforeach
                                   </select>
                                   @error('beauty_id')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <a href="{{ route('disease.index') }}" class="btn btn-secondary float-end ms-3">Kembali</a>
                                   <button class="btn btn-primary float-end">Update</button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection