<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $films = [
            [
                'poster' => 'poster_anak1.jpg',
                'judul' => 'Film Anak Pertama',
                'deskripsi' => 'Deskripsi film anak pertama.',
                'tahun_rilis' => 2020,
                'durasi' => 90,
                'rate_imdb' => 7.5,
                'jenis' => 'film',
                'kategori_usia' => 'Anak',
                'link_streaming' => 'http://linkstreaminganak1.com',
            ],
            [
                'poster' => 'poster_assnak1.jpg',
                'judul' => 'Film Anssak Pertama',
                'deskripsi' => 'Dessssskripsi film anak pertama.',
                'tahun_rilis' => 2020,
                'durasi' => 90,
                'rate_imdb' => 7.5,
                'jenis' => 'film',
                'kategori_usia' => 'Anak',
                'link_streaming' => 'http://linkstreaminganak1.com',
            ],
            [
                'poster' => 'poster_remaja1.jpg',
                'judul' => 'Film Remaja Pertama',
                'deskripsi' => 'Deskripsi film remaja pertama.',
                'tahun_rilis' => 2018,
                'durasi' => 110,
                'rate_imdb' => 8.2,
                'jenis' => 'film',
                'kategori_usia' => 'Remaja',
                'link_streaming' => 'http://linkstreamingremaja1.com',
            ],
            [
                'poster' => 'poster_dewasa1.jpg',
                'judul' => 'Film Dewasa Pertama',
                'deskripsi' => 'Deskripsi film dewasa pertama.',
                'tahun_rilis' => 2022,
                'durasi' => 130,
                'rate_imdb' => 6.9,
                'jenis' => 'film',
                'kategori_usia' => 'Dewasa',
                'link_streaming' => 'http://linkstreamingdewasa1.com',
            ],
        ];

        foreach ($films as $film) {
            Film::create($film);
        }
    }
}
