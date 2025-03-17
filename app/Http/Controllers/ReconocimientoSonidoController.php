<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReconocimientoSonidoController extends Controller
{
    //
    /**
     * Recibe un archivo de audio y lo envía a la API de Python para su procesamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function subirAudio(Request $request)
    {
        // Validar que se haya enviado un archivo de audio (ajusta las extensiones si es necesario)
        $request->validate([
            'audio' => 'required|file|mimes:wav,mp3,ogg'
        ]);

        // Obtener el archivo de audio subido
        $audioFile = $request->file('audio');

        // Realizar la petición POST a la API Flask, adjuntando el archivo de audio
        $response = Http::attach(
            'audio', 
            file_get_contents($audioFile->getRealPath()), 
            $audioFile->getClientOriginalName()
        )->post('http://127.0.0.1:5000/api/procesar');

        // Verificar si la petición fue exitosa
        if ($response->successful()) {
            $data = $response->json();
            // Puedes retornar una vista con los datos de respuesta
            return view('recosonido.resultado', compact('data'));
        } else {
            // Si hubo un error, redirige atrás con un mensaje de error
            return back()->withErrors('Error al procesar el audio en la API de Python.');
        }
    }
}
