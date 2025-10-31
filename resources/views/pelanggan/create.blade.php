@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <form action="{{ route('pelanggan.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Nama Pelanggan</label>
                                <input type="text" class="form-control @error('nama') is-invalid
                                @enderror"> @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Alamat Pelanggan</label>
                                <input type="text" name="nim" class="form-control @error('alamat') is-invalid
                                @enderror">
                                @error('nim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Nomor Telepon Pelanggan</label>
                                <input type="text" name="no_telp" class="form-control @error('no_telp') is-invalid
                                @enderror">
                                @error('no_telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-block btn-primary">Simpan</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection