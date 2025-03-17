@extends('adminlte::page')

@section('title', 'Gracias por completar el formulario')

@section('content_header')
    <h1>Gracias por completar el formulario</h1>
@stop

@section('content')
    <div class="container">
        <div class="card bg-light mb-4">
            <div class="card-body text-center">
                <h2 class="card-title">¡Gracias por tu participación!</h2>
                <p class="card-text">Tu respuesta ha sido registrada correctamente.</p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title text-center">Resumen de Puntuación</h2>
                <br>
                <p><strong>Puntaje total del formulario:</strong> {{ $totalPoints }}</p>
                <p><strong>Tu puntaje:</strong> {{ $earnedPoints }}</p>
                <p><strong>Respuestas correctas:</strong> {{ $correctAnswersCount }}</p>
                <p><strong>Respuestas incorrectas:</strong> {{ $incorrectAnswersCount }}</p>
                <!-- Nueva línea para mostrar la categoría y el mensaje de aliento -->
                <p><strong>Categoría:</strong> {{ $categoria }}</p>
                <p><strong>Mensaje de aliento:</strong> {{ $mensajeAliento }}</p>
            </div>
        </div>

        <!-- Botón para mostrar/ocultar respuestas -->
        <button class="btn btn-primary mb-4" onclick="toggleRespuestas()">
            <i class="fas fa-eye"></i> Ver Respuestas del Formulario
        </button>

        <!-- Contenedor de respuestas (oculto inicialmente) -->
        <div id="respuestas" class="card respuestas-container" style="display: none;">
            <div class="card-body">
                <h2 class="card-title">Respuestas del Formulario</h2>
                <ul class="list-group">
                    @foreach ($questionResults as $index => $result)
                        <li class="list-group-item">
                            <strong>Pregunta {{ $index + 1 }}:</strong>
                            <span class="{{ $result['correct'] ? 'text-success' : 'text-danger' }}">
                                {{ $result['correct'] ? 'Correcta' : 'Incorrecta' }}
                            </span>
                            - <b>{{ $result['user_response'] }}</b>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card.bg-light {
            background-color: #e9ecef !important;
        }

        .card-title {
            color: #343a40;
            font-weight: bold;
        }

        .list-group-item {
            border: none;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .text-success {
            color: #28a745 !important;
        }

        .text-danger {
            color: #dc3545 !important;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .respuestas-container {
            margin-top: 20px;
            padding: 15px;
            background-color: #fff;
            border-radius: 10px;
        }
    </style>
@stop

@section('js')
    <script>
        function toggleRespuestas() {
            const respuestas = document.getElementById('respuestas');
            const boton = document.querySelector('.btn-primary');

            if (respuestas.style.display === 'none') {
                respuestas.style.display = 'block';
                boton.innerHTML = '<i class="fas fa-eye-slash"></i> Ocultar Respuestas';
            } else {
                respuestas.style.display = 'none';
                boton.innerHTML = '<i class="fas fa-eye"></i> Ver Respuestas del Formulario';
            }
        }
    </script>
@stop