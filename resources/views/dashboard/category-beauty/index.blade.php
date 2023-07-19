@extends('layouts.dashboard')
@section('title', 'Admin | Kategori Beauty')
    
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
                    <h4>Data Kategori Beauty</h4>
                    <a href="{{ route('category-beauty.create') }}" class="btn btn-primary">Tambah</a>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-bordered table-hover" id="dataTable">
                              <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Aksi</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @php
                                       $no= 1;
                                   @endphp
                                   @foreach ($categoryBeauties as $cb)                                       
                                   <tr>
                                        <td width="7%">{{ $no++ }}</td>
                                        <td>{{ $cb->nama_kategori }}</td>
                                        <td width="17%">
                                             {{-- <a href="#" class="btn btn-info"><i class="fa-solid fa-eye"></i></a> --}}
                                             <a href="{{ route('category-beauty.edit', encrypt($cb->id)) }}" class="btn btn-warning">
                                                  <i class="fa-regular fa-pen-to-square"></i>
                                              </a>
                                              <form action="{{ route('category-beauty.destroy', encrypt($cb->id)) }}" method="POST" class="d-inline">
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