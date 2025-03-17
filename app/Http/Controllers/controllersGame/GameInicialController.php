<?php

namespace App\Http\Controllers\controllersGame;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameInicialController extends Controller
{
    //
    public function index()
    {
        return view('juego.index');
    }
    
    public function gameuno()
    {
        return view('juego.gameuno');
    }

    public function mental()
    {
        return view('juego.juegomental');
    }
    public function mental1()
    {
        return view('juego.juegomenta1');
    }

    public function comparar()
    {
        return view('juego.juegocompa');
    }
    public function compara1()
    {
        return view('juego.juegocompara1');
    }
}

