@extends('layouts.home')
@section('title', 'Home | Detail Penyakit')
    
@section('content')
<div class="row mt-5 mb-2 p-5" id="disease">
     <h1 class="text-center">Detail Penyakit</h1>
     <div class="col-md-6">
          <img src="{{ url('storage/diseases/'. $d->gambar_penyakit) }}" alt="Gambar Penyakit" class="img img-fluid img-thumbnail rounded">
          <h3>{{ $d->nama_penyakit }}</h3>
          <p>{{ $d->deskripsi_penyakit }}</p>
     </div>
     <div class="col-md-6">
          <h4 class="text-decoration-underline">Product Beauty Rekomendasi</h4>
          <h5>{{ $d->beauties->nama_beauty }}</h5>
          <img src="{{ url('storage/beauties/'. $d->beauties->gambar_beauty) }}" class="img img-fluid" alt="">
     </div>
</div>
<div class="row mt-2 mb-2 p-5">
     @foreach ($diseases as $d)
     <div class="col-md-3">
          <a href="{{ route('detail-penyakit', $d->id) }}" class="text-decoration-none text-dark">
               <img src="{{ url('storage/diseases/'. $d->gambar_penyakit) }}" alt="Gambar Penyakit" class="img img-fluid img-thumbnail rounded">
               <h3>{{ $d->nama_penyakit }}</h3>
               <p>{{ $d->deskripsi_penyakit }}</p>
          </a>
     </div>
     @endforeach
</div>
@endsection