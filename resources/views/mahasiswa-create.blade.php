@extends('layouts.main')

@section('content')
<h1 class="text-center">Tambah Mahasiswa</h1>

<div class="row mt-5">
    <div class="col-md-6 offset-md-3">
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>NIM</label>
                <input type="number" name="nim" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Prodi</label>
                <input type="text" name="prodi" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>No HP</label>
                <input type="number" name="nohp" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ url('/mahasiswa') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
