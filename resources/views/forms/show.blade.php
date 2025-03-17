@extends('adminlte::page')

@section('title', $form->title)

@section('content_header')
    <div class="card card-header">
        <div class="card bg-dark">
            <table width="100%">
                <tr>
                    <td align="left" width="5%">
                        <h2><i class="fas fa-clipboard-list"></i></h2>
                    </td>
                    <td align="center">
                        <h2>{{ $form->title }}</h2>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@stop

@section('content')
    <div class="card mb-4">
        <div class="card-body">
            <h1 class="card-title">{{ $form->title }}</h1>
            <p class="card-text">{{ $form->description }}</p>
            <p><strong>Fecha de Publicación:</strong> {{ $form->publish_date }} {{ $form->publish_time }}</p>
            <p><strong>Duración:</strong> {{ $form->duration }} minutos</p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('forms.responses.store', $form) }}" method="POST">
                @csrf
                @foreach ($form->questions as $question)
                    <div class="mb-4">
                        <label class="form-label">{{ $question->label }} ({{ $question->points }} puntos)</label>

                        @if ($question->type == 'multiple_choice')
                            @foreach (explode(',', $question->options) as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="responses[{{ $question->id }}]" value="{{ $option }}" {{ $question->required ? 'required' : '' }}>
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        @elseif ($question->type == 'checkbox')
                            @foreach (explode(',', $question->options) as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="responses[{{ $question->id }}][]" value="{{ $option }}">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        @elseif ($question->type == 'option_with_text')
                            <div class="form-group">
                                <label>{{ $question->options }}</label>
                                <input type="text" name="responses[{{ $question->id }}]" class="form-control" {{ $question->required ? 'required' : '' }}>
                            </div>
                        @endif
                    </div>
                @endforeach

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-paper-plane"></i> Enviar Respuesta
                </button>
            </form>
        </div>
    </div>
@stop