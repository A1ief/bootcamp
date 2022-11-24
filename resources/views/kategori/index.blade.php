@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
        <h1 class="text-center">Data kategori</h1>
        <a href="{{ route('kategori.create') }}" class="btn btn-primary m-2" style="float: right">tambah Kategori</a>
        <table class="table table-bordered text-center">
           <thead>
              <tr>
                 <th class="col-2">No</th>
                 <th class="col">Nama</th>
                 <th class="col-3">Aksi</th>
              </tr>
           </thead>
           <tbody>
            @foreach ($data as $item)
            <tr>
               <th scope="row">{{ $loop->iteration }}</th>
               <td>{{ $item->nama }}</td>
               <td>
                   <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-outline-success btn-sm">Update</a>
                   <a href="{{ url('hapkat/'. $item->id) }}" class="btn btn-outline-danger btn-sm">Delete</a>
                   
               </td>
            </tr>
            @endforeach
           </tbody>
        </table>
    </div>
    </div>

</div>
@endsection
