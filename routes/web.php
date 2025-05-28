<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        'active' => 'home'
    ]);
});

Route::get('/search', [MahasiswaController::class, 'index']);

//Halaman Detail Siswa
Route::get('search/{post:name}', [MahasiswaController::class, 'show']);

