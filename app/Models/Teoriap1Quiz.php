<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teoriap1Quiz extends Model
{
  /**
     * Retorna un arreglo con las preguntas organizadas por nivel.
     */
    public static function getQuestions()
    {
        return [
            'basico' => [
                [
                    'key' => 'q1',
                    'question' => '¿Qué es la técnica vocal?',
                    'options'  => [
                        'A' => 'Es la forma de usar y cuidar nuestra voz para cantar y hablar sin lastimarla.',
                        'B' => 'Es una manera de correr.',
                        'C' => 'Es una forma de dibujar.',
                        'D' => 'Es una técnica para escribir.'
                    ],
                    'correct'  => 'A'
                ],
                [
                    'key' => 'q2',
                    'question' => '¿Por qué es importante tener una buena postura al cantar?',
                    'options'  => [
                        'A' => 'Porque ayuda a respirar mejor.',
                        'B' => 'Porque nos hace saltar más alto.',
                        'C' => 'Porque es divertido.',
                        'D' => 'Porque nos ayuda a dibujar.'
                    ],
                    'correct'  => 'A'
                ],
                [
                    'key' => 'q3',
                    'question' => '¿Qué ejercicio te ayuda a sentir cómo respiras correctamente?',
                    'options'  => [
                        'A' => 'Colocar una mano en el abdomen.',
                        'B' => 'Saltar en el lugar.',
                        'C' => 'Correr rápido.',
                        'D' => 'Gritar fuerte.'
                    ],
                    'correct'  => 'A'
                ],
            ],
            'intermedio' => [
                [
                    'key' => 'q4',
                    'question' => 'En la respiración diafragmática, ¿qué parte del cuerpo debe moverse primero al inhalar?',
                    'options'  => [
                        'A' => 'El abdomen.',
                        'B' => 'El pecho.',
                        'C' => 'La cabeza.',
                        'D' => 'Los brazos.'
                    ],
                    'correct'  => 'A'
                ],
                [
                    'key' => 'q5',
                    'question' => '¿Qué ejercicio se utiliza para practicar la pronunciación de las vocales?',
                    'options'  => [
                        'A' => 'Decir “ma-me-mi-mo-mu”.',
                        'B' => 'Contar números en voz alta.',
                        'C' => 'Saltar en el lugar.',
                        'D' => 'Dibujar en una hoja.'
                    ],
                    'correct'  => 'A'
                ],
                [
                    'key' => 'q6',
                    'question' => '¿Qué significa el ejercicio de “hacer el sireno”?',
                    'options'  => [
                        'A' => 'Deslizar la voz de grave a agudo de forma suave.',
                        'B' => 'Imitar el sonido de un sireno de coche.',
                        'C' => 'Gritar muy fuerte.',
                        'D' => 'Saltar mientras cantas.'
                    ],
                    'correct'  => 'A'
                ],
                [
                    'key' => 'q7',
                    'question' => '¿Qué ejercicio te ayuda a soltar el aire de manera controlada?',
                    'options'  => [
                        'A' => 'Hacer un sonido suave como “ssss”.',
                        'B' => 'Correr rápido.',
                        'C' => 'Saltar sin parar.',
                        'D' => 'Hablar muy rápido.'
                    ],
                    'correct'  => 'A'
                ],
            ],
            'avanzado' => [
                [
                    'key' => 'q8',
                    'question' => '¿Por qué es importante relajar los hombros y el cuello antes de cantar?',
                    'options'  => [
                        'A' => 'Para evitar tensiones y que la voz suene mejor.',
                        'B' => 'Para correr más rápido.',
                        'C' => 'Para saltar más alto.',
                        'D' => 'Para escribir mejor.'
                    ],
                    'correct'  => 'A'
                ],
                [
                    'key' => 'q9',
                    'question' => 'En el juego “llamar y responder”, ¿qué debes hacer?',
                    'options'  => [
                        'A' => 'Repetir la melodía y el ritmo que dice el maestro.',
                        'B' => 'Crear una melodía nueva.',
                        'C' => 'Cambiar la letra de la canción.',
                        'D' => 'Hablar en voz baja.'
                    ],
                    'correct'  => 'A'
                ],
                [
                    'key' => 'q10',
                    'question' => '¿Cuál es el beneficio de practicar la técnica vocal todos los días?',
                    'options'  => [
                        'A' => 'Mantener la voz fuerte, clara y saludable.',
                        'B' => 'Aprender a correr rápido.',
                        'C' => 'Mejorar en matemáticas.',
                        'D' => 'Aprender a dibujar.'
                    ],
                    'correct'  => 'A'
                ],
            ]
        ];
    }
}
