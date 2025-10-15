@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Hobi</h2>
        <form action="{{ route('hobi.update', $hobi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('hobi.form')
            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
@endsection
