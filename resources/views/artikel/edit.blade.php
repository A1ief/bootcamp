@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row">
         <div class="col">
            <h1 class="text-center">Input Kategori</h1>
            <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
               @csrf
               @method('put')
               <div>
                  <label for="judul" class="form-label">judul</label>
                  <input type="text" class="form-control" name="judul" value="{{ $artikel->judul }}" required>
               </div>
               <div class="mb-3">
                  <label for="foto" class="form-label">Foto</label>
                  <img src="{{ asset('storage/'.$artikel->foto) }}" alt="erorr" width="150px" class="m-3">
                  <input type="file" class="form-control" name="foto">
               </div>
               <div class="mb-3">
                  <label for="isi" class="form-label">Isi</label>
                  <input type="text" class="form-control" name="isi" value="{{ $artikel->isi }}" required>
               </div>
               <div class="mb-3">
                  <label class="form-label">Kategori</label>
                  <select class="form-select" aria-label="Default select example" name="kategori_id">
                     <option selected>Open this select menu</option>
                     @foreach ($kategori as $item)
                        <option value="{{ $item->id }}" @selected($artikel->kategori_id==$item->id)>{{ $item->nama }}</option>
                     @endforeach
                  </select>
               </div>
               <a href="{{ route('artikel.index') }}" class="btn btn-primary btn-sm ms-2" style="float: right">kembali</a>
               <button type="submit" class="btn btn-primary btn-sm" style="float: right">Submit</button>
            </form>
         </div>
      </div>
   </div>
@endsection
