@extends('layouts.dashboard')
@section('title', 'Admin | Detail Beauty')
    
@section('content')
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Detail Beauty</h4>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-hover table-bordered">
                              <tr>
                                   <th>Kategori Beauty</th>
                                   <td>{{ $b->categoryBeauties->nama_kategori }}</td>
                              </tr>
                              <tr>
                                   <th>Gambar Beauty</th>
                                   <td><img src="{{ url('storage/beauties/'. $b->gambar_beauty) }}" alt="Gambar Beauty" class="img img-fluid" width="200px"></td>
                              </tr>
                              <tr>
                                   <th>Kode Beauty</th>
                                   <td>{{ $b->kode_beauty }}</td>
                              </tr>
                              <tr>
                                   <th>Nama Beauty</th>
                                   <td>{{ $b->nama_beauty }}</td>
                              </tr>
                              <tr>
                                   <th>Stok Beauty</th>
                                   <td>{{ $b->stok_beauty }}</td>
                              </tr>
                              <tr>
                                   <th>Harga Beauty</th>
                                   <td>Rp. {{ $b->harga_beauty }}</td>
                              </tr>
                         </table>
                    </div>
               </div>
               <div class="card-footer">
                    <a href="{{ route('beauty.index') }}" class="btn btn-secondary float-end">Kembali</a>
               </div>
          </div>
     </div>
</div>
@endsection