<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Teoriap1Quiz;


class Teoriap1QuizController extends Controller
{
   
    public function menu()
    {
        return view('teoriap1_quiz.menu');
    }

    /**
     * Muestra el formulario del nivel solicitado.
     *
     * @param string $level Debe ser "basico", "intermedio" o "avanzado".
     */
    public function form($level)
    {
        $levels = ['basico', 'intermedio', 'avanzado'];
        if (!in_array($level, $levels)) {
            abort(404);
        }
        $questions = Teoriap1Quiz::getQuestions()[$level];
        return view('teoriap1_quiz.form', compact('questions', 'level'));
    }

    /**
     * Procesa el formulario del nivel actual y llama a la API Python.
     * Según la evaluación difusa, redirige al siguiente nivel o repite el actual.
     */
    public function evaluate(Request $request, $level)
    {
        // Validar respuestas para las preguntas del nivel actual
        $questions = Teoriap1Quiz::getQuestions()[$level];
        $rules = [];
        foreach ($questions as $q) {
            $rules[$q['key']] = 'required|string';
        }
        $request->validate($rules);

        $responses = $request->only(array_keys($rules));

        // Crear cliente HTTP para llamar a la API Python
        $client = new Client(['base_uri' => 'http://127.0.0.1:5000']);
        try {
            $response = $client->post('/evaluateLevel', [
                'json' => [
                    'level' => strtolower($level),
                    'responses' => $responses,
                ]
            ]);
            $body = json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al evaluar: ' . $e->getMessage());
        }

        // Retornamos una vista de resultado en la cual se muestran
        // promedio, evaluación final, fuzzy_details, etc.
        return view('teoriap1_quiz.result', compact('body'));
    }
}
