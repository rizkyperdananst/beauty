@extends('layouts.home')
@section('title', 'Home')
    
@section('content')
{{-- Start Disease (Penyakit) --}}
<div class="row mt-2 p-5" id="disease">
     <h1 class="text-center mb-2">Disease</h1>
     @foreach ($diseases as $d)
     <div class="col-md-4">
          <a href="{{ route('detail-penyakit', $d->id) }}" class="text-decoration-none text-dark">
               <img src="{{ url('storage/diseases/'. $d->gambar_penyakit) }}" alt="" class="img img-fluid img-thumbnail rounded">
               <h4 class="mt-3">{{ $d->nama_penyakit }}</h4>
               <p>{{ Str::limit($d->deskripsi_penyakit, 50) }}</p>
          </a>
     </div>
     @endforeach
</div>
{{-- End Disease --}}

{{-- Start Product --}}
<div class="row mt-5 p-3" id="product">
     <h1 class="text-center">Product Beauty</h1>
     @foreach ($products as $p)
     <div class="col-md-3 text-center">
          <a href="{{ route('detail-product', $p->id) }}" class="text-decoration-none text-dark">
               <img src="{{ url('storage/beauties/'. $p->gambar_beauty) }}" class="img img-fluid img-thumbnail rounded" alt="Product">
               <h5 class="mt-1">{{ $p->nama_beauty }}</h5>
               <h6>Rp. {{ $p->harga_beauty }}</h6>
               <small>Stok : {{ $p->stok_beauty }} Pcs</small>
          </a>
     </div>
     @endforeach
</div>   
{{-- End Product --}}

{{-- Start About --}}
<div class="row mt-5 p-5" id="about">
     <div class="col-md-6">
          <img src="{{ url('assets/beauty/bg-hero.jpg') }}" class="img img-fluid img-thumbnail rounded" alt="Image About">
     </div>
     <div class="col-md-6">
          <h2>About Beauty</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus delectus excepturi, sequi laudantium omnis perferendis officia. Dicta voluptate voluptates eligendi commodi odio dolore, nulla, a similique exercitationem facere asperiores, reiciendis totam autem? Adipisci accusantium dolorem voluptate veniam omnis, soluta, laudantium quia, veritatis expedita laborum totam illo! Id cumque aut perspiciatis!</p>
          <button class="btn btn-secondary">Learn More</button>
     </div>
</div>
{{-- Start About --}}
@endsection