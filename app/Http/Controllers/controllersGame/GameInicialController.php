<?php

namespace App\Http\Controllers\controllersGame;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameInicialController extends Controller
{
    //
    public function index()
    {
        return view('juego.gameuno');
    }
}

