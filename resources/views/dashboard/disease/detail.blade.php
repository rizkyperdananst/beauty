@extends('layouts.dashboard')
@section('title', 'Admin | Detail Penyakit')
    
@section('content')
<div class="row mt-2 mb-2">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Detail Penyakit</h4>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-bordered table-hover">
                              <tbody>
                                   <tr>
                                        <th>Gambar Penyakit</th>
                                        <td><img src="{{ url('storage/diseases/'. $d->gambar_penyakit) }}" alt="Gambar Penyakit" width="200" class="img img-fluid img-thumbnail rounded"></td>
                                   </tr>
                                   <tr>
                                        <th>Nama Penyakit</th>
                                        <td>{{ $d->nama_penyakit }}</td>
                                   </tr>
                                   <tr>
                                        <th>Deskripsi Penyakit</th>
                                        <td>{{ $d->deskripsi_penyakit }}</td>
                                   </tr>
                                   <tr>
                                        <th>Product Beauty Rekomendasi</th>
                                        <td>{{ $d->beauties->nama_beauty }}</td>
                                   </tr>

                              </tbody>
                         </table>
                    </div>
               </div>
               <div class="card-footer">
                    <a href="{{ route('disease.index') }}" class="btn btn-secondary float-end">Kembali</a>
               </div>
          </div>
     </div>
</div>
@endsection