<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\COM_COMUNA;
use app\EVE_EVENTOS;
use app\User;


class eventosController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function indexEventos(){

        return view('eventos.indexEvento' );

    }

    public function fichaEventos(){

        return view('eventos.fichaEvento' );

    }

    public function listadoDeEventos(){

        return view('eventos.listadoDeEventos' );

    }

    public function formularioCrearEventos(){

        return view('eventos.crearNoticia' );

    }

}
