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
}

