@extends ('layouts.app')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Tambah Data Mahasiswa</div>
                    <div class="card-body">

                        <form action="{{ route('wali.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Nama </label>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}}</strong>
                                        </span>
                                @enderror
                            </div>  

                                <div class="mb-3">
                                    <label for="id_wali">Wali</label>
                                    <select name="id_wali" id="id_wali" class="form-control @error('id_wali') is-invalid @enderror">
                                        @foreach ($wali as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_wali')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
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