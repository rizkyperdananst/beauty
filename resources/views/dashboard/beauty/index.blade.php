@extends('layouts.dashboard')
@section('title', 'Admin | Beauty')
    
@section('content')
<div class="row mb-3">
     <div class="col-12">
         @if (session('status'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
             <strong>{{ session('status') }}</strong>
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>
         @endif
     </div>
 </div>
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header d-flex justify-content-between">
                    <h4>Data Beauty</h4>
                    <a href="{{ route('beauty.create') }}" class="btn btn-primary">Tambah</a>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-bordered table-hover" id="dataTable">
                              <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Kategori Beauty</th>
                                        <th>Gambar Beauty</th>
                                        <th>Nama Beauty</th>
                                        <th>Aksi</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @php
                                       $no= 1;
                                   @endphp
                                   @foreach ($beauties as $b)                                       
                                   <tr>
                                        <td width="7%">{{ $no++ }}</td>
                                        <td>{{ $b->categoryBeauties->nama_kategori }}</td>
                                        <td><img src="{{ url('storage/beauties/'. $b->gambar_beauty) }}" alt="Gambar Beauty" class="img img-fluid" width="150px"></td>
                                        <td>{{ $b->nama_beauty }}</td>
                                        <td width="19%">
                                             <a href="{{ route('beauty.show', encrypt($b->id)) }}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                                             <a href="{{ route('beauty.edit', encrypt($b->id)) }}" class="btn btn-warning">
                                                  <i class="fa-regular fa-pen-to-square"></i>
                                              </a>
                                              <form action="{{ route('beauty.destroy', encrypt($b->id)) }}" method="POST" class="d-inline">
                                                  @csrf
                                                  @method('delete')
                                                  <button type="submit" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></button>
                                              </form>
                                        </td>
                                   </tr>
                                   @endforeach
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection