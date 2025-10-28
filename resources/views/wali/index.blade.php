@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            
                        </div>
                        <div class="float-end">
                            <a href="{{ route('wali.create') }}" class="btn btn-sm btn-outline-primary">Tambah Data</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Daftar Nama Wali</th>
                                        <th>Nama Siswa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @forelse ($wali as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->wali->nama }}</td>
                                            <td>
                                                <form action="{{ route('wali.destroy', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('wali.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-dark">Show</a>
                                                    <a href="{{ route('wali.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">Edit</a>
                                                    <button type="submit" onsubmit="return confirm('Are You Sure ?');"
                                                        class="btn btn-sm btn-danger">Delete</button>
                                                 </form>
                                            </td>
                                        </tr>
                                    @empty
                                            <td colspan="4" class="text-center">
                                            <td colspan="6" class="text-center">
                                                Data Belum Tersedia
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection