<?php

use Illuminate\Support\Facades\Http; 
use Illuminate\Support\Facades\Route;

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
    return view('mahasiswa');
});
