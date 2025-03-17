<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audio; 

class AudioController extends Controller

{
    // public function index()
    // {
        
        
    //     return view('audio.index');
    // }
     // Método para guardar los registros en la tabla "audio"
     public function store(Request $request)
     {
         $data = $request->validate([
             'features' => 'required|array'
         ]);
 
         $audio = Audio::create([
             'features' => $data['features']
         ]);
 
         return response()->json(['success' => true, 'record' => $audio]);
     }
 
     // Método para visualizar los registros guardados en la tabla "audio"
     public function index()
     {
         $audios = Audio::orderBy('created_at', 'desc')->get();
         return view('audio.index', compact('audios'));
     }
}
