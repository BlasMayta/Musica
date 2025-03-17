<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\TeoriaQuiz;

class TeoriaQuizController extends Controller
{
    //

    /**
     * Muestra el formulario del quiz.
     */
    public function index()
    {
        $questions = TeoriaQuiz::getQuestions();
        return view('teoria_quiz.index', compact('questions'));
    }

    /**
     * Procesa las respuestas del quiz y llama a la API Python.
     */
    public function evaluate(Request $request)
    {
        // Validar que se hayan respondido todas las preguntas.
        $request->validate([
            'q1' => 'required|string',
            'q2' => 'required|string',
            'q3' => 'required|string',
        ]);

        // Extraer las respuestas.
        $answers = $request->only(['q1', 'q2', 'q3']);

        // Crear un cliente HTTP (Guzzle) para llamar a la API Python.
        $client = new Client(['base_uri' => 'http://127.0.0.1:5000']);

        try {
            $response = $client->post('/evaluateQuiz', [
                'json' => $answers,
            ]);

            $body = json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al evaluar: ' . $e->getMessage());
        }

        return view('teoria_quiz.result', compact('body'));
    }
}
