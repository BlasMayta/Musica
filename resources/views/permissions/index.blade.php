@extends('adminlte::page')


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection

@section('title', 'Dashboard')


@section('content_header')

@stop

@section('content')
<div class="card bg-dark">
    <div class="card-header">
        <table width=100%>
            <tr>
                <td align="left" width=5%>
                    <h2><i class="fas fa-user-shield"></i></h2>
                </td>
                <td align="center">
                    <h2>PERMISOS</h2>
                </td>
            </tr>
        </table>
    </div>
    <div class="card-body">
        @if(Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{Session::get('mensaje')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @include('permissions.create')
        <br />
        <br />
        <table class="table table-striped" id="empleado">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Servicio</th>
                    <th>Fecha de creacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <!-- <tbody>
                @foreach($permissions as $permission)
                <tr>
                    <td>{{ $permission->id}}</td>
                    <td>{{ $permission->name}}</td>
                    <td>{{ $permission->guard_name}}</td>
                    <td>{{ \Carbon\Carbon::parse($permission->created_at)->format('d-m-Y')}}</td>
                    <td>
                        @include('permissions.edit')


                        <form action="{{ url('/permissions/'.$permission->id) }}" class="d-inline formulario-eliminar" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger" type="submit">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody> -->

        </table>

    </div>



</div>


@stop
@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop
@section('js')
    <!-- <script>console.log('hola')</script> -->
@stop
