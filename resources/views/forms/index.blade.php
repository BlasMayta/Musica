@extends('adminlte::page')

@section('title', 'Lista de Formularios')

@section('content_header')
    <div class="card card-header">
        <div class="card bg-dark">
            <table width="100%">
                <tr>
                    <td align="left" width="5%">
                        <h2><i class="fas fa-clipboard-list"></i></h2>
                    </td>
                    <td align="center">
                        <h2>LISTA DE FORMULARIOS</h2>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@stop

@section('content')
    <!-- Botón para crear un nuevo formulario -->
    <a href="{{ route('forms.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Crear Nuevo Formulario
    </a>

    <!-- Mensaje de éxito -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Tabla de formularios -->
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Fecha de Publicación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($forms as $form)
                        <tr>
                            <td>
                                <!-- Enlace para ver detalles del formulario -->
                                <a href="{{ route('forms.show', $form) }}">
                                    {{ $form->title }}
                                </a>
                            </td>
                            <td>{{ $form->publish_date }} {{ $form->publish_time }}</td>
                            <td>
                                <!-- Botón para ver todos los contenidos -->
                                <a href="{{ route('forms.show', $form) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i> Ver Contenidos
                                </a>

                                <!-- Botón para editar -->
                                <a href="{{ route('forms.edit', $form) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Editar
                                </a>

                                <!-- Botón para eliminar -->
                                <form action="{{ route('forms.destroy', $form) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" 
                                            onclick="return confirm('¿Estás seguro de eliminar este formulario?')">
                                        <i class="fas fa-trash"></i> Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <!-- Estilos adicionales si los necesitas -->
    <style>
        .btn-sm {
            margin-right: 5px;
        }
    </style>
@stop

@section('js')
    <!-- Scripts adicionales si los necesitas -->
    <script>
        // Cierra automáticamente la alerta de éxito después de 3 segundos
        $(document).ready(function() {
            setTimeout(function() {
                $(".alert").alert('close');
            }, 3000);
        });
    </script>
@stop