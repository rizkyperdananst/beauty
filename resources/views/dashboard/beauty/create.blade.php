@extends('layouts.dashboard')
@section('title', 'Admin | Tambah Beauty')
    
@section('content')
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Tambah Beauty</h4>
               </div>
               <div class="card-body">
                    <form action="{{ route('beauty.store') }}" method="POST" enctype="multipart/form-data">
                         @csrf
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="category_beauty_id" class="form-label">Kategori Beauty</label>
                                   <select name="category_beauty_id" id="category_beauty_id" class="form-select @error('category_beauty_id') is-invalid @enderror">
                                        <option selected hidden>Pilih Kategori Beauty</option>
                                        @foreach ($categoryBeauties as $cb)
                                            <option value="{{ $cb->id }}">{{ $cb->nama_kategori }}</option>
                                        @endforeach
                                   </select>
                                   @error('category_beauty_id')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="gambar_beauty" class="form-label">Gambar Beauty</label>
                                   <input type="file" name="gambar_beauty" id="gambar_beauty" class="form-control @error('gambar_beauty') is-invalid @enderror">
                                   @error('gambar_beauty')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="kode_beauty" class="form-label">Kode Beauty</label>
                                   <input type="text" name="kode_beauty" id="kode_beauty" class="form-control @error('kode_beauty') is-invalid @enderror" placeholder="masukkan kode beauty">
                                   @error('kode_beauty')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="nama_beauty" class="form-label">Nama Beauty</label>
                                   <input type="text" name="nama_beauty" id="nama_beauty" class="form-control @error('nama_beauty') is-invalid @enderror" placeholder="masukkan nama beauty">
                                   @error('nama_beauty')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="stok_beauty" class="form-label">Stok Beuaty</label>
                                   <input type="number" name="stok_beauty" id="stok_beauty" class="form-control @error('stok_beauty') is-invalid @enderror" placeholder="masukkan stok beauty">
                                   @error('stok_beauty')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="harga_beauty" class="form-label">Harga Beauty</label>
                                   <input type="number" name="harga_beauty" id="harga_beauty" class="form-control @error('harga_beauty') is-invalid @enderror" placeholder="masukkan harga beauty">
                                   @error('harga_beauty')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <a href="{{ route('beauty.index') }}" class="btn btn-secondary float-end ms-3">Kembali</a>
                                   <button class="btn btn-primary float-end">Tambah</button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection