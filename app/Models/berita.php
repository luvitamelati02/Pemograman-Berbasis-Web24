<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    private static $data_berita = [
        [
            "nama" => "Berita 1",
            "slug" => "berita-1",
            "author" => "Luvita Melati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod."
        ],
        [
            "nama" => "Berita 2",
            "slug" => "berita-2",
            "author" => "Luvita Melati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod."
        ],
    ];
}
