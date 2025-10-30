@extends('layouts.main')

@section('content')
<h1 class="text-center text-danger">Hapus Data Mahasiswa</h1>

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="text-center text-danger mb-4">Apakah kamu yakin ingin menghapus data ini?</h5>

            <table class="table table-bordered">
                <tr>
                    <th>Nama</th>
                    <td>{{ $mahasiswa->name }}</td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td>{{ $mahasiswa->nim }}</td>
                </tr>
                <tr>
                    <th>Prodi</th>
                    <td>{{ $mahasiswa->prodi }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $mahasiswa->email }}</td>
                </tr>
                <tr>
                    <th>No HP</th>
                    <td>{{ $mahasiswa->nohp }}</td>
                </tr>
            </table>

            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                    Batal
                </a>

                <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Yakin ingin menghapus {{ $mahasiswa->name }}?')">
                        Hapus Data
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
