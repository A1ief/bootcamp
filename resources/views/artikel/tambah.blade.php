@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row">
         <div class="col">
            <h1 class="text-center">Input Kategori</h1>
            <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="mb-3">
                  <label for="judul" class="form-label">judul</label>
                  <input type="text" class="form-control" name="judul" required>
               </div>
               <div class="mb-3">
                  <label for="foto" class="form-label">Foto</label>
                  <input type="file" class="form-control" name="foto" required>
               </div>
               <div class="mb-3">
                  <label for="isi" class="form-label">Isi</label>
                  <input type="text" class="form-control" name="isi" required>
               </div>
               <div class="mb-3">
                  <label class="form-label">Kategori</label>
                  <select class="form-select" aria-label="Default select example" name="kategori_id">
                     <option selected>Open this select menu</option>
                     @foreach ($kategori as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                     @endforeach
                  </select>
               </div>
               <a href="{{ route('artikel.index') }}" class="btn btn-success btn-sm ms-2" style="float: right">kembali</a>
               <button type="submit" class="btn btn-success btn-sm" style="float: right">Submit</button>
            </form>
         </div>
      </div>
   </div>
@endsection
