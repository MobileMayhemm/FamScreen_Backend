<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\FilmApiController;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/anak', [FilmApiController::class, 'getByCategory'])->defaults('kategori', 'anak');
Route::get('/remaja', [FilmApiController::class, 'getByCategory'])->defaults('kategori', 'remaja');
Route::get('/dewasa', [FilmApiController::class, 'getByCategory'])->defaults('kategori', 'dewasa');
