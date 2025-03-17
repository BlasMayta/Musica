<?php

namespace App\Http\Controllers\ControllerContenido;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContenidoController extends Controller
{
    public function index()
    {
        return view('contenidoinicio.index');
    }
    
    public function principal()
    {
        return view('contenidoinicio.principal');
    }

    public function iniciomusica()
    {
        return view('contenidoinicio.iniciomusica');
    }
    public function teoriamusica()
    {
        return view('contenidoinicio.iniciomusica');
    }


    public function sonoro()
    {
        return view('contenidoinicio.iniciosonoro');
    }

    public function pentagrama()
    {
        return view('contenidoinicio.pentagrama');
    }

    public function nota()
    {
        return view('contenidoinicio.lasnotas');
    }
    
    public function figura()
    {
        return view('contenidoinicio.figuras');
    }
    public function clave()
    {
        return view('contenidoinicio.claves');
    }
    public function puntillo()
    {
        return view('contenidoinicio.puntillos');
    }
    public function ligadura()
    {
        return view('contenidoinicio.laligadura');
    }
    public function trisillo()
    {
        return view('contenidoinicio.eltrisillo');
    }
    //CONTENIDO PRIMER TRIMESTRE
    public function ptecvocal()
    {
        return view('contenidoinicio.ptecvocal');
    }
    public function pentonacion()
    {
        return view('contenidoinicio.pentonacion');
    }
    public function pparametro()
    {
        return view('contenidoinicio.pparametro');
    }

    // CONTENIDO INICIO DE LA MUSICA SONORO

    public function naturaleza()
    {
        return view('sonoro.naturaleza');
    }
    public function animales()
    {
        return view('sonoro.animales');
    }
    public function instrumentos()
    {
        return view('sonoro.instrumentos');
    }
    
}
