<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Question;
use App\Models\Response;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::with('questions')->get();
        return view('forms.index', compact('forms'));
    }

    public function create()
    {
        return view('forms.create');
    }
    public function edit($id)
    {
        $form = Form::findOrFail($id); // Obtener el formulario a editar
        return view('forms.edit', compact('form')); // Pasar el formulario a la vista
    }
    public function update(Request $request, $id)
    {
      // Validar los datos del formulario
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'publish_date' => 'required|date',
        'publish_time' => 'required|date_format:H:i',
        'duration' => 'required|integer|min:1',
        'questions' => 'required|array',
        'questions.*.label' => 'required|string|max:255',
        'questions.*.type' => 'required|in:multiple_choice,checkbox,option_with_text',
        'questions.*.options' => 'nullable|array',
        'questions.*.correct_answer' => 'required|string',
        'questions.*.points' => 'required|integer|min:0',
        'questions.*.required' => 'sometimes|boolean',
    ]);

    // Obtener el formulario y actualizar los datos
    $form = Form::findOrFail($id);
    $form->update($validatedData);

    // Eliminar preguntas existentes y guardar las nuevas
    $form->questions()->delete();
    foreach ($request->questions as $questionData) {
        // Convertir opciones a una cadena separada por comas
        if (isset($questionData['options']) && is_array($questionData['options'])) {
            $questionData['options'] = implode(',', $questionData['options']);
        } else {
            $questionData['options'] = null; // Si no hay opciones, guardar como NULL
        }
        $form->questions()->create($questionData);
    }

    // Redirigir con un mensaje de éxito
    return redirect()->route('forms.index')->with('success', 'Formulario actualizado correctamente.');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'publish_date' => 'required|date',
            'publish_time' => 'required',
            'duration' => 'required|numeric|min:1',
            'questions' => 'required|array',
            'questions.*.type' => 'required|in:multiple_choice,checkbox,option_with_text',
            'questions.*.label' => 'required|string',
            'questions.*.options' => 'required_if:questions.*.type,multiple_choice,checkbox|array',
            'questions.*.correct_answer' => 'nullable|string',
            'questions.*.points' => 'required|numeric|min:0',
            'questions.*.required' => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $form = Form::create([
            'title' => $request->title,
            'description' => $request->description,
            'publish_date' => $request->publish_date,
            'publish_time' => $request->publish_time,
            'duration' => $request->duration,
        ]);

        foreach ($request->questions as $questionData) {
            $options = isset($questionData['options']) ? implode(',', $questionData['options']) : null;
            $form->questions()->create([
                'type' => $questionData['type'],
                'label' => $questionData['label'],
                'options' => $options,
                'correct_answer' => $questionData['correct_answer'],
                'points' => $questionData['points'],
                'required' => $questionData['required'] ?? false,
            ]);
        }

        return redirect()->route('forms.index')->with('success', 'Formulario creado correctamente.');
    }

    public function show(Form $form)
    {
        $form->load('questions');
        return view('forms.show', compact('form'));
    }

    public function storeResponse(Request $request, Form $form)
    {
        $totalPoints = 0;
        $earnedPoints = 0;
        $correctAnswersCount = 0;
        $incorrectAnswersCount = 0;
        $questionResults = [];

        foreach ($form->questions as $question) {
            $totalPoints += $question->points;

            $response = $request->responses[$question->id] ?? null;
            if ($response) {
                $isCorrect = false;

                if ($question->type == 'multiple_choice' || $question->type == 'option_with_text') {
                    $isCorrect = ($response == $question->correct_answer);
                } elseif ($question->type == 'checkbox') {
                    $correctAnswers = explode(',', $question->correct_answer);
                    if (is_array($response)) {
                        sort($response);
                        sort($correctAnswers);
                        $isCorrect = ($response == $correctAnswers);
                    }
                }

                if ($isCorrect) {
                    $earnedPoints += $question->points;
                    $correctAnswersCount++;
                } else {
                    $incorrectAnswersCount++;
                }

                Response::create([
                    'form_id' => $form->id,
                    'question_id' => $question->id,
                    'response' => is_array($response) ? json_encode($response) : $response,
                ]);

                $questionResults[] = [
                    'label' => $question->label,
                    'correct' => $isCorrect,
                    'correct_answer' => $question->correct_answer,
                    'user_response' => is_array($response) ? implode(', ', $response) : $response,
                ];
            }
        }

        return redirect()->route('forms.thankyou', [
            'totalPoints' => $totalPoints,
            'earnedPoints' => $earnedPoints,
            'correctAnswersCount' => $correctAnswersCount,
            'incorrectAnswersCount' => $incorrectAnswersCount,
            'questionResults' => json_encode($questionResults),
        ]);
    }

    public function thankYou(Request $request)
    { 
        $totalPoints = $request->query('totalPoints');
        $earnedPoints = $request->query('earnedPoints');
        $correctAnswersCount = $request->query('correctAnswersCount');
        $incorrectAnswersCount = $request->query('incorrectAnswersCount');
        $questionResults = json_decode($request->query('questionResults'), true);

        // Calcular la categoría y el mensaje de aliento usando lógica difusa
        list($categoria, $mensajeAliento) = $this->evaluarNotaDifusa($earnedPoints);

        return view('forms.thankyou', compact(
            'totalPoints',
            'earnedPoints',
            'correctAnswersCount',
            'incorrectAnswersCount',
            'questionResults',
            'categoria',
            'mensajeAliento'
        ));
    }

    private function evaluarNotaDifusa($nota)
    {
        
        // Funciones de pertenencia
        $malo = $this->funcionPertenenciaTriangular($nota, 0, 15, 30);
        $regular = $this->funcionPertenenciaTriangular($nota, 25, 37.5, 50);
        $bueno = $this->funcionPertenenciaTriangular($nota, 45, 57.5, 70);
        $muyBueno = $this->funcionPertenenciaTriangular($nota, 65, 75, 85);
        $excelente = $this->funcionPertenenciaTriangular($nota, 80, 100, 100);

        // Determinar la categoría con mayor pertenencia
        $categorias = [
            'Malo' => $malo,
            'Regular' => $regular,
            'Bueno' => $bueno,
            'Muy Bueno' => $muyBueno,
            'Excelente' => $excelente,
        ];

        $categoria = array_search(max($categorias), $categorias);

        // Mensajes de aliento para cada categoría
        $mensajesAliento = [
            'Malo' => '¡No te desanimes! Sigue practicando y mejorarás.',
            'Regular' => 'Vas por buen camino, pero aún hay margen de mejora. ¡Sigue así!',
            'Bueno' => '¡Buen trabajo! Estás cerca de alcanzar un gran resultado.',
            'Muy Bueno' => '¡Excelente esfuerzo! Estás muy cerca de la perfección.',
            'Excelente' => '¡Felicidades! Has alcanzado un resultado sobresaliente.',
        ];

        $mensajeAliento = $mensajesAliento[$categoria];

        return [$categoria, $mensajeAliento];
    }


    private function funcionPertenenciaTriangular($x, $a, $b, $c)
    {
        if ($x <= $a || $x >= $c) {
            return 0;
        } elseif ($x == $b) {
            return 1;
        } elseif ($x < $b) {
            return ($x - $a) / ($b - $a);
        } else {
            return ($c - $x) / ($c - $b);
        }
    }

    public function destroy(Form $form)
    {
        $form->delete();
        return redirect()->route('forms.index')->with('success', 'Formulario eliminado correctamente.');
    }
}