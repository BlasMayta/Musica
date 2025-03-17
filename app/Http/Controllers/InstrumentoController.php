<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstrumentoController extends Controller
{
    public function index(){
        
       return view('piano.index');
     }
     public function zampona(){
        
      return view('piano.zampona');
    }
}
