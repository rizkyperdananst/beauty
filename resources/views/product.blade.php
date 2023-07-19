@extends('layouts.home')
@section('title', 'Home | Product')
    
@section('content')
<div class="row mt p-5" id="product">
     <div class="col-md-5">
          <img src="{{ url('storage/beauties/'. $p->gambar_beauty) }}" alt="" class="img img-fluid img-thumbnail rounded">
     </div>
     <div class="col-md-7">
          <h1>Name :{{ $p->nama_beauty }}</h1>
          <h3>Price : Rp. {{ $p->harga_beauty }}</h3>
          <h5>Stok : {{ $p->stok_beauty }}</h5>
     </div>
</div>
<div class="row mt-2 p-5">
     @foreach ($products as $p)
     <div class="col-md-3">
          <a href="{{ route('detail-product', $p->id) }}" class="text-decoration-none text-dark">
               <img src="{{ url('storage/beauties/'. $p->gambar_beauty) }}" alt="" class="img img-fluid img-thumbnail rounded">
               <h5>Name :{{ $p->nama_beauty }}</h5>
               <h6>Price : Rp. {{ $p->harga_beauty }}</h6>
               <small class="fw-bold">Stok : {{ $p->stok_beauty }}</small>
          </a>
     </div>
     @endforeach
</div>
@endsection