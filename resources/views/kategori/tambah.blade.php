@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Input Kategori</h1>
                <form action="{{ route('kategori.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama" required>
                      </div>
                      <a href="{{ route('kategori.index') }}" class="btn btn-success btn-sm ms-2" style="float: right">kembali</a>
                      <button type="submit" class="btn btn-success btn-sm" style="float: right">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection