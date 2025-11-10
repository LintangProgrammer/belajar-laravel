@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Daftar Pelanggan</h3>
            <a href="{{ route('pelanggan.create') }}" class="btn btn-primary"> Tambah Data Pelanggan</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Aksi</th>

                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @forelse ($pelanggan as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->telepon }}</td>

                        <td>
                    <form action="{{ route('pelanggan.destroy', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('pelanggan.show', $data->id) }}" class="btn btn-sm btn-outline-dark">Show</a>
                        <a href="{{ route('pelanggan.edit', $data->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
                        <button type="submit" onsubmit="return confirm('Are You Sure ?');" class="btn btn-sm btn-danger">Delete</button>
                    </td>
                    </form>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada data pelanggan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection