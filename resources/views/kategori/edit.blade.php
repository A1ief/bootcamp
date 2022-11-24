@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Update Kategori</h1>
                <form action="{{ route('kategori.update', $kategori->id ) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama" value="{{ $kategori->nama }}" required>
                      </div>
                      <button type="submit" class="btn btn-success" style="float: right">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection