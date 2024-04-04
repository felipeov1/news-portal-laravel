<?php

namespace App\Http\Controllers;

use App\Models\Noticia;

class NoticiasController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticias = Noticia::orderBy('created_at', 'desc')->paginate(8);
        return view('noticias', ['noticias' => $noticias]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Noticia $noticia)
    {
        return view('noticia.visualizar', ['noticia' => $noticia]);

    }

}
