@extends('layouts.dashboard')
@section('title', 'Admin | Tambah Kategori')
    
@section('content')
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Tambah Kategori</h4>
               </div>
               <div class="card-body">
                    <form action="{{ route('category-beauty.store') }}" method="POST">
                         @csrf
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <label for="nama_kategori" class="form-label">Nama Kategori</label>
                                   <input type="text" name="nama_kategori" id="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror" placeholder="masukkan nama kategori">
                                   @error('nama_kategori')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <a href="{{ route('category-beauty.index') }}" class="btn btn-secondary float-end ms-3">Kembali</a>
                                   <button class="btn btn-primary float-end">Tambah</button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection