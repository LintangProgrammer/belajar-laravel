@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Hobi</h2>
        <a href="{{ route('hobi.create') }}" class="btn btn-primary mb-3">Tambah Hobi</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Hobi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hobis as $data)
                    <tr>
                        <td>{{ $data->nama_hobi }}</td>
                        <td>
                            <a href="{{ route('hobi.edit', $data->nama_hobi) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('hobi.destroy', $data->nama_hobi) }}" method="POST" style="display:inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection