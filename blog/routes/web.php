<?php

use Illuminate\Support\Facades\Route;

// Ruta d'inici
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// Llistat de posts
Route::get('/posts', function () {
    return view('posts.listado');
})->name('posts_listado');

// Ficha d'un post (id numèric obligatori)
Route::get('/posts/{id}', function ($id) {
    return view('posts.ficha', compact('id'));
})->where('id', '[0-9]+')->name('posts_ficha');
