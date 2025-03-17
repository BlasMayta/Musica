@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Resultado del Quiz de Teoría Musical</h1>

    @if(isset($body['error']))
        <p style="color:red;">Error: {{ $body['error'] }}</p>
    @else
        <h2>Detalle de Resultados</h2>
        <ul>
            @foreach($body['scores'] as $key => $score)
                <li>
                    <strong>{{ $score['question'] }}</strong><br>
                    Respuesta correcta: {{ $score['correct_answer'] }}<br>
                    Tu respuesta: {{ $score['student_answer'] }}<br>
                    Similitud: {{ $score['similarity'] }}%<br>
                    Puntaje: {{ number_format($score['score'], 2) }}
                </li>
                <br>
            @endforeach
        </ul>
        <p><strong>Puntaje Promedio:</strong> {{ number_format($body['average_score'], 2) }}</p>
        <p><strong>Evaluación Final (Difusa):</strong> {{ number_format($body['final_grade'], 2) }}</p>
    @endif

    <br>
    <a href="{{ route('teoria.quiz.index') }}">Volver al Quiz</a>
@stop

@section('css')
@stop

@section('js')
    <!-- <script>console.log('hola')</script> -->
@stop
