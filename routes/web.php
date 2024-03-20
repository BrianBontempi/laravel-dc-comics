<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Lista Comics
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// Dettaglio comics
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');


Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');


Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');