@extends('layouts.main')
@section('title', 'Data Mahasiswa | Luvita')

@section('content')
<div class="container mt-5">
    <h2 class="text-center fw-bold mb-4" style="color:#333;">Data Mahasiswa</h2>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Tombol tambah data --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="fw-semibold text-secondary">Daftar Mahasiswa</h5>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-pink fw-semibold px-4 py-2 rounded-pill shadow-sm">
            <i class="bi bi-plus-circle me-2"></i>Tambah Data
        </a>
    </div>

    {{-- Tabel Data --}}
    <div class="table-responsive">
        <table class="table table-striped table-bordered text-center align-middle">
            <thead class="table-pink">
                <tr>
                    <th style="width: 5%;">No</th>
                    <th style="width: 20%;">Nama</th>
                    <th style="width: 10%;">NIM</th>
                    <th style="width: 15%;">Prodi</th>
                    <th style="width: 20%;">Email</th>
                    <th style="width: 15%;">No HP</th>
                    <th style="width: 15%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if($data->count() > 0)
                    @foreach($data as $mahasiswa)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mahasiswa->name }}</td>
                        <td>{{ $mahasiswa->nim }}</td>
                        <td>{{ $mahasiswa->prodi }}</td>
                        <td>{{ $mahasiswa->email }}</td>
                        <td>{{ $mahasiswa->nohp }}</td>
                        <td>
                            {{-- Tombol Edit --}}
                            <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" 
                               class="btn btn-sm btn-primary rounded-pill px-3 me-1">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>

                            {{-- Tombol Hapus --}}
                            <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" 
                                  method="POST" 
                                  class="d-inline"
                                  onsubmit="return confirm('Yakin mau hapus data ini, {{ $mahasiswa->name }}?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger rounded-pill px-3">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7" class="text-center text-muted py-4">
                            Belum ada data mahasiswa.
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

{{-- Style tambahan --}}
<style>
    .btn-pink {
        background-color: #ff9ebc;
        color: white;
        border: none;
        transition: 0.3s ease;
    }
    .btn-pink:hover {
        background-color: #ff7fa3;
        color: white;
    }
    .table-pink {
        background-color: #ffe3ec;
        color: #333;
        border-bottom: 2px solid #ff9ebc;
    }
    table th, table td {
        border: 1px solid #f3c7d2 !important;
        vertical-align: middle;
        padding: 12px;
    }
    table tr:nth-child(even) {
        background-color: #fff7f9;
    }
    table tr:hover {
        background-color: #ffeef3;
    }
</style>
@endsection
