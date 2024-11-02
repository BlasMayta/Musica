<?php

namespace App\Http\Controllers\controllersHimno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    //
    public function index()
    {

       return view('himno.iniciopatriotico', [


        'imagePath' => '/path/to/image.jpg',

        ]); 

       
    }

    public function departamento()
    {

       return view('himdepartamento.iniciodepartamento', [


        'imagePath' => '/path/to/image.jpg',

        ]); 

       
    }
}
