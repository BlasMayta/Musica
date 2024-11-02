<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Question;
use App\Models\Response;


class FormController extends Controller
{
    public function index()
    {
        $forms = Form::all();
        return view('forms.index', compact('forms'));
    }

    public function create()
    {
        return view('forms.create');
    }

    public function store(Request $request)
    {
        $form = Form::create($request->only('title', 'description'));

        foreach ($request->questions as $questionData) {
            $options = isset($questionData['options']) ? implode(',', $questionData['options']) : null;
            $correctAnswer = isset($questionData['correct_options']) ? implode(',', $questionData['correct_options']) : null;

            $form->questions()->create([
                'type' => $questionData['type'],
                'label' => $questionData['label'],
                'options' => $options,
                'required' => isset($questionData['required']),
                'points' => $questionData['points'],
                'correct_answer' => $correctAnswer,
            ]);
        }

        return redirect()->route('forms.index');
    }

    public function show(Form $form)
    {
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
                    if ($response == $question->correct_answer) {
                        $isCorrect = true;
                    }
                } elseif ($question->type == 'checkbox') {
                    $correctAnswers = explode(',', $question->correct_answer);
                    if (is_array($response)) {
                        sort($response);
                        sort($correctAnswers);
                        if ($response == $correctAnswers) {
                            $isCorrect = true;
                        }
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
        $respuestas = [
            ['respuesta' => 'Sí', 'estado' => 'correcta'],
            ['respuesta' => 'No', 'estado' => 'incorrecta'],
            ['respuesta' => 'Quizás', 'estado' => 'correcta'],
        ];

        return view('thankyou', [
            'totalPoints' => 100,
            'earnedPoints' => 85,
            'correctAnswersCount' => 2,
            'incorrectAnswersCount' => 1,
            'respuestas' => $respuestas,
        ]);



        $totalPoints = $request->query('totalPoints');
        $earnedPoints = $request->query('earnedPoints');
        $correctAnswersCount = $request->query('correctAnswersCount');
        $incorrectAnswersCount = $request->query('incorrectAnswersCount');
        $questionResults = json_decode($request->query('questionResults'), true);

        return view('forms.thankyou', compact('totalPoints', 'earnedPoints', 'correctAnswersCount', 'incorrectAnswersCount', 'questionResults'));
    }
    

    public function destroy(Form $form)
    {
        $form->delete();
        return redirect()->route('form.index')->with('eliminar', 'ok');
    }

    
}
