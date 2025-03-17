<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeoriaQuiz extends Model
{
     /**
     * Devuelve las preguntas predefinidas para el quiz.
     */
    public static function getQuestions()
    {
        return [
            'q1' => [
                'question'    => '¿Qué es la música?',
                'placeholder' => 'Escribe tu respuesta aquí...',
            ],
            'q2' => [
                'question'    => 'Menciona un tipo de música.',
                'placeholder' => 'Ejemplo: Clásica, Rock, etc.',
            ],
            'q3' => [
                'question'    => '¿Qué es una partitura?',
                'placeholder' => 'Escribe tu respuesta aquí...',
            ],
        ];
    }
}
