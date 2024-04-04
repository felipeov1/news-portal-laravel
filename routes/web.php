<?php

use App\Http\Controllers\NoticiasController;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\ProfileController;


Route::get('/', [NoticiasController::class, 'index'])->name('noticias.noticia');
Route::get('/noticia/{noticia}', [NoticiasController::class, 'show'])->name('noticia.show');


// Route::get('/notcia/{noticias}', [NoticiasController::class, 'show'])->name('noticia.show');



