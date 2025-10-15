@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Biodata</h2>
        <form action="{{ route('dosen.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('dosen.form')
            <button type="submit" class="btn btn-success mt-3">Simpan</button>
        </form>
    </div>
@endsection