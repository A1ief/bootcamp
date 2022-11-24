@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
        <h1 class="text-center">Data Artikel</h1>
        <a href="{{ route('artikel.create') }}" class="btn btn-primary m-2" style="float: right">tambah Artikel</a>
        <table class="table table-bordered text-center" style="vertical-align: middle">
           <thead>
              <tr>
                 <th class="col">No</th>
                 <th class="col">judul</th>
                 <th class="col">Foto</th>
                 <th class="col">isi</th>
                 <th class="col">Kategori</th>
                 <th class="col">TanggalArtikel</th>
                 <th class="col">Aksi</th>
              </tr>
           </thead>
           <tbody>
            @foreach ($data as $item)
            <tr>
               <th scope="row">{{ $loop->iteration }}</th>
               <td>{{ $item->judul }}</td>
               <td>
                <img src="{{ asset('storage/' . $item->foto) }}" alt="erroer" width="120px">
               </td>
               <td>{{ $item->isi }}</td>
               <td>{{ $item->kategori->nama }}</td>
               <td>{{ $item->created_at->format('d/m/y') }}</td>
               <td>
                   <a href="{{ route('artikel.edit', $item->id) }}" class="btn btn-outline-success btn-sm">Update</a>
                   <a href="{{ url('hapArt/'. $item->id) }}" class="btn btn-outline-danger btn-sm">Delete</a>
                   
               </td>
            </tr>
            @endforeach
           </tbody>
        </table>
    </div>
    </div>

</div>
@endsection