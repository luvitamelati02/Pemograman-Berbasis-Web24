@extends('layouts.main')

@section('title', 'Tambah Data Mahasiswa | Luvita')

@section('content')
<div class="container mt-5">
    <h2 class="text-center fw-bold mb-4" style="color:#333;">Tambah Data Mahasiswa</h2>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold">Nama</label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ old('name') }}" placeholder="Masukkan nama mahasiswa" required>
                </div>

                <div class="mb-3">
                    <label for="nim" class="form-label fw-semibold">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control"
                        value="{{ old('nim') }}" placeholder="Masukkan NIM" required>
                </div>

                <div class="mb-3">
                    <label for="prodi" class="form-label fw-semibold">Prodi</label>
                    <input type="text" name="prodi" id="prodi" class="form-control"
                        value="{{ old('prodi') }}" placeholder="Masukkan program studi" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" name="email" id="email" class="form-control"
                        value="{{ old('email') }}" placeholder="Masukkan email mahasiswa" required>
                </div>

                <div class="mb-3">
                    <label for="nohp" class="form-label fw-semibold">No HP</label>
                    <input type="text" name="nohp" id="nohp" class="form-control"
                        value="{{ old('nohp') }}" placeholder="Masukkan nomor HP" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
