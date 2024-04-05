<?php

use App\Http\Controllers\NoticiasController;
use Illuminate\Support\Facades\Route;



Route::get('/', [NoticiasController::class, 'index'])->name('noticias.noticia');
Route::get('/noticia/{noticia}', [NoticiasController::class, 'show'])->name('noticia.show');





