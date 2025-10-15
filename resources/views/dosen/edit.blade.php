@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Biodata</h2>
        <form action="{{ route('dosen.update', $dosen->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('dosen.form')
            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
@endsection