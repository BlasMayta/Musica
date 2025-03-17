@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Quiz de Teoría Musical</h1>
    @if(session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif

    <form action="{{ route('teoria.quiz.evaluate') }}" method="POST">
        @csrf
        @foreach($questions as $key => $q)
            <div>
                <label for="{{ $key }}">{{ $q['question'] }}</label><br>
                <input type="text" name="{{ $key }}" id="{{ $key }}" placeholder="{{ $q['placeholder'] }}" required>
            </div>
            <br>
        @endforeach
        <button type="submit">Enviar respuestas</button>
    </form>
 @stop

@section('css')
@stop

@section('js')
    <!-- <script>console.log('hola')</script> -->
@stop
