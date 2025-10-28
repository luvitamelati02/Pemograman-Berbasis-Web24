@extends('layouts.main')

@section('content')
<h1 class="text-center">Data Mahasiswa</h1>
<div class="row mt-5">
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-success mb-2">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>Email</th>
                <th>No Hp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($data->count() > 0)
                @foreach($data as $mahasiswa)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $mahasiswa->name }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->prodi }}</td>
                    <td>{{ $mahasiswa->email }}</td>
                    <td>{{ $mahasiswa->nohp }}</td>
                    <td>
                        <button type="button" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7" class="text-center">Belum ada data mahasiswa.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
