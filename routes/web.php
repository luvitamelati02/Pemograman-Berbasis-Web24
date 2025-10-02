<?php

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
    return view('berita');
});

Route::get('/contact', function () {
    return view('contact');
});
