@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection

@section('title','Roles')

@section('content')
<div class="card bg-dark">
    <div class="card-header">
        <table width=100%>
            <tr>
                <td align="left" width=5%>
                    <h2><i class="fas fa-user-tag"></i></h2>
                </td>
                <td align="center">
                    <h2>ROLES</h2>
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
        <a href="{{ url('roles/create') }}" class="btn btn-success"><i class="fas fa-plus-circle"></i> Nuevo</a>
        <br />
        <br />
        <table class="table table-striped" id="empleado">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Servicio</th>
                    <th>Fecha de creacion</th>
                    <th>Permisos</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                 @forelse($roles as $rol)
                <tr>
                    <td>{{ $rol->id}}</td>
                    <td>{{ $rol->name}}</td>
                    <td>{{ $rol->guard_name}}</td>
                    <td>{{ \Carbon\Carbon::parse($rol->created_at)->format('d-m-Y')}}</td>
                    <td>
                        @forelse ($rol->permissions as $permission)
                        <span class="badge badge-info">{{$permission->name}}</span>
                        @empty
                        <span class="badge badge-danger">No asignado</span>
                        @endforelse
                    </td>
                    <td>

                        <a href="{{ url('/roles/'.$rol->id.'/edit') }}" class="btn btn-warning"><i class="fas fa-pen"></i></a>

                        <form action="{{ url('/roles/'.$rol->id) }}" class="d-inline formulario-eliminar" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger" type="submit">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>

                    </td>
                </tr>
                @endforeach 
            </tbody>

        </table>

    </div>
</div>
@endsection

@section('js')

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
@stop