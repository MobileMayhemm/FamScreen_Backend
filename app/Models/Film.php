<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Film extends Model
{
    use HasFactory;

    protected $table = 'film';

    protected $fillable = [
        'poster',
        'judul',
        'deskripsi',
        'tahun_rilis',
        'durasi',
        'rate_imdb',
        'jenis',
        'kategori_usia',
        'link_streaming',
    ];
}
