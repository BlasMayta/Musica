@extends('adminlte::page')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
@section('title', 'Dashboard')

<title>{{ $form->title }}</title>
@section('content_header')

<div class="card card-header">
        <div class="card bg-dark">
            <table width=100%>
                <tr>
                    <td align="left" width=5%>
                        <h2><i class="fas fa-clipboard-list"></i></h2>
                    </td>
                    <td align="center">
                    <title>{{ $form->title }}</title>
                    </td>
                </tr>
            </table>
        </div>

    <h1>{{ $form->title }}</h1>
    <p>{{ $form->description }}</p>

    <form action="{{ route('forms.responses.store', $form) }}" method="POST">
        @csrf
        @foreach($form->questions as $question)
            <div>
                <label>{{ $question->label }} ({{ $question->points }} puntos)</label>
                @if($question->type == 'multiple_choice')
                    @foreach(explode(',', $question->options) as $option)
                        <div>
                            <input type="radio" name="responses[{{ $question->id }}]" value="{{ $option }}" {{ $question->required ? 'required' : '' }}>
                            <label>{{ $option }}</label>
                        </div>
                    @endforeach
                @elseif($question->type == 'checkbox')
                    @foreach(explode(',', $question->options) as $option)
                        <div>
                            <input type="checkbox" name="responses[{{ $question->id }}][]" value="{{ $option }}">
                            <label>{{ $option }}</label>
                        </div>
                    @endforeach
                @elseif($question->type == 'option_with_text')
                    <div>
                        <label>{{ $question->options }}</label>
                        <input type="text" name="responses[{{ $question->id }}]" {{ $question->required ? 'required' : '' }}>
                    </div>
                @endif
            </div>
        @endforeach

        <button type="submit">Enviar Respuesta</button>
    </form>
</div>
@stop













