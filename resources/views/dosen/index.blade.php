@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Biodata</h2>
        <a href="{{ route('dosen.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Nipd</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($dosens as $data)
                    <tr>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->nipd }}</td>
                        <td>
                            <a href="{{ route('dosen.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('dosen.destroy', $data->id) }}" method="POST" style="display:inline">
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