@extends('adminlte::page')

@section('title', 'Registros de Audio')

@section('content_header')
    <h1>Registros de Audio</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Listado de Registros Guardados</h3>
        </div>
        <div class="card-body">
            @if($audios->count())
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Características (Features)</th>
                            <th>Fecha de Creación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($audios as $audio)
                            <tr>
                                <td>{{ $audio->id }}</td>
                                <td>
                                    <pre>{{ json_encode($audio->features, JSON_PRETTY_PRINT) }}</pre>
                                </td>
                                <td>{{ $audio->created_at->format('d/m/Y H:i:s') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No se han registrado datos de audio.</p>
            @endif
        </div>
    </div>
@stop
