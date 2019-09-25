<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\COM_COMUNA;
use app\NOT_NOTICIA;
use app\User;

class noticiasController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexNoticias(){

        return view('noticias.indexNoticias' );

    }

    public function fichaNoticia(){

        return view('noticias.fichaNoticia' );

    }

    public function listadoDeNoticias(){

        return view('noticias.listadoDeNoticias' );

    }

    public function formularioCrearNoticia(){

        return view('noticias.crearNoticia' );

    }
}
