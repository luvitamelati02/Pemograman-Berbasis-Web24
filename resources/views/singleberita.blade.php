@extends('layouts.main')

@section('content')
    <article>
        <h1>{{ $new_berita["judul"] }}</h1>
        <h3>{{ $new_berita["penulis"] }}</h3>
        <p>{{ $new_berita["kontak"] }}</p>
    </article>

    ahref="/berita">Kembali ke Berita</a>
@endsection
