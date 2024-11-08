<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;

class FilmApiController extends Controller
{
    public function getByCategory($kategori)
    {
        $films = Film::where('kategori_usia', ucfirst($kategori))->get();

        if ($films->isEmpty()) {
            return response()->json('data kosong');
        }

        return response()->json($films);
    }
}
