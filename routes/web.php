<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MangaController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/user/{id}', [UserController::class, 'show']);
    Route::get('/users', [UserController::class, 'index']);

    Route::get('/fetch/genre', [GenreController::class, 'fetch']);
    Route::get('/fetch/manga', [MangaController::class, 'fetch']);

    Route::get('/genre/manga', [GenreController::class, 'indexManga'])->name('genre/manga');
    Route::get('/mangas', [MangaController::class, 'indexManga'])->name('mangas');

    Route::controller(MangaController::class)->group(function(){
        Route::get('/search', 'search')->name('search.manga');
        Route::get('/manga/{id}', 'showManga')->name('manga.show');
    });
});


