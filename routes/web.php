<?php

use Illuminate\Support\Facades\Http; 
use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;



Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile', [
        "nama" => "Luvita Melati",
        "nohp" => "08225210157",
        "foto" => "img/luvita.jpg",
    ]);
});

Route::get('/berita', function () {
    return view('berita', 
    [
        "nama" => "Berita 1",
        "slug" => "berita-1",
        "author" => "Luvita Melati",

    ]);
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/berita1', function () {
    return view('berita1');
});

Route::get('/berita2', function () {
    return view('berita2');
});

Route::get('/berita3', function () {
    return view('berita3');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/mahasiswa', function () {
    $data = Mahasiswa::all();
    return view('mahasiswa', compact('data'));
});

Route::get('/mahasiswa/create', function () {
    return view('mahasiswa-create');
})->name('mahasiswa.create');

Route::post('/mahasiswa', function (Request $request) {
    Mahasiswa::create($request->all());
    return redirect('/mahasiswa');
})->name('mahasiswa.store');

// Halaman Edit Mahasiswa
Route::get('/mahasiswa/{id}/edit', function ($id) {
    $mahasiswa = \App\Models\Mahasiswa::findOrFail($id);
    return view('mahasiswa-edit', compact('mahasiswa'));
})->name('mahasiswa.edit');

// Proses Update Data
Route::put('/mahasiswa/{id}', function (\Illuminate\Http\Request $request, $id) {
    $mahasiswa = \App\Models\Mahasiswa::findOrFail($id);
    $mahasiswa->update($request->all());
    return redirect('/mahasiswa')->with('success', 'Data berhasil diperbarui!');
})->name('mahasiswa.update');

// Hapus Data Mahasiswa
Route::delete('/mahasiswa/{id}', function ($id) {
    $mahasiswa = \App\Models\Mahasiswa::findOrFail($id);
    $mahasiswa->delete();
    return redirect('/mahasiswa')->with('success', 'Data berhasil dihapus!');
})->name('mahasiswa.destroy');

// Halaman daftar mahasiswa
Route::get('/mahasiswa', function () {
    $data = Mahasiswa::all();
    return view('mahasiswa', compact('data'));
})->name('mahasiswa.index');
