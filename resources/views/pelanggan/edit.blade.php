@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h4>Edit Pelanggan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama', $pelanggan->nama) }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control">{{ old('alamat', $pelanggan->alamat) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label>Telepon</label>
                        <input type="text" name="telepon" class="form-control" value="{{ old('telepon', $pelanggan->telepon) }}">
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection