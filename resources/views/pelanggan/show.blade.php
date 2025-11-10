@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h4>Detail Pelanggan</h4>
            </div>
            <div class="card-body">
                <p><strong>Nama:</strong> {{ $pelanggan->nama }}</p>
                <p><strong>Alamat:</strong> {{ $pelanggan->alamat ?? '-' }}</p>
                <p><strong>Telepon:</strong> {{ $pelanggan->telepon ?? '-' }}</p>

                <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection