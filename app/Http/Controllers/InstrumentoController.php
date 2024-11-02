<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstrumentoController extends Controller
{
    public function piano(){
        
       return view('instrumento.piano');
     }
}
