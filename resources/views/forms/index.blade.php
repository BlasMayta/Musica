@extends('adminlte::page')

@section('title', 'Formulario')


@section('content_header')

<div class="card card-header">
    <div class="card bg-dark">
        <table width=100%>
            <tr>
                <td align="left" width=5%>
                    <h2><i class="fas fa-clipboard-list"></i></h2>
                </td>
                <td align="center">
                    <h2> LISTA DEL FORMULARIO</h2>
                </td>
            </tr>
        </table>
    </div>
    @stop

    @section('content')


    <a href="{{ route('forms.create') }}">Crear Nuevo Formulario</a>

    @foreach($forms as $form)
        <li>
            <a href="{{ route('forms.show', $form) }}">{{ $form->title }}</a>
        </li>

        <form action="{{ url('forms/' . $form->id) }}" class="d-inline formulario-eliminar" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <button class="btn btn-danger eliminar" type="submit">
                <i class="fas fa-trash"></i>
            </button>
        </form>
    @endforeach


</div>
@stop
@section('css')

@stop
@section('js')

@stop