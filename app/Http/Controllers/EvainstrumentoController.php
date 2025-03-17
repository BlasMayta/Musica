<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EvainstrumentoController extends Controller
{
    //
   // Muestra el menú con los niveles disponibles.
   public function menu()
   {
       return view('instru.menu');
   }

   // Muestra el formulario de evaluación para el nivel seleccionado.
   public function form($nivel)
   {
       // Solo se aceptan: basic, intermediate y advanced.
       if (!in_array($nivel, ['basic', 'intermediate', 'advanced'])) {
           abort(404);
       }
       return view('instru.form', compact('nivel'));
   }

   // Procesa el formulario y llama a la API Python para evaluar el desempeño.
   public function evaluate(Request $request, $nivel)
   {
       // Validar el dato ingresado (valor numérico entre 0 y 10)
       $request->validate([
           'performance' => 'required|numeric|min:0|max:10'
       ]);

       // Crear un cliente HTTP para llamar a la API Python (asegúrate de que la API esté corriendo en http://127.0.0.1:5000)
       $client = new Client(['base_uri' => 'http://127.0.0.1:5000']);

       try {
           $response = $client->request('POST', '/evaluate', [
               'json' => [
                   'nivel' => $nivel,
                   'performance' => $request->performance
               ]
           ]);
           $body = json_decode($response->getBody(), true);
       } catch (\Exception $e) {
           return back()->with('error', 'Error al evaluar: ' . $e->getMessage());
       }

       return view('instru.result', compact('body'));
   }
}
