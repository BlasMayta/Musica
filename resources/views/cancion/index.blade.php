@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection

@section('title', 'CANCIONES')
@section('content_header')

    <div class="card card-header">
        <div class="card bg-dark">
            <table width=100%>
                <tr>
                    <td align="left" width=5%>
                        <h2><i class="fas fa-clipboard-list"></i></h2>
                    </td>
                    <td align="center">
                        <h2> CANCIONES </h2>
                    </td>
                </tr>
            </table>
        </div>

        <div class="card-body">
            @if (Session::has('mensaje'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ Session::get('mensaje') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="float-ring">


                @include('cancion.create')
            </div>

            <div class="table-responsive">
                <table class="table table-striped" id="docentes">
                    <thead class="table-dark">

                        <th>id</th>
                        <th>Nombre</th>
                        <th>Letra</th>
                        <th>Musica</th>
                        <th>Imagen</th>
                        <th>Audio</th>
                        <th>Video</th>
                        <th>Estrofas I</th>
                        <th>Estrofas II</th>
                        <th>Estrofas III</th>
                        <th>Estrofas IV</th>
                        <th>Estrofas V</th>
                        <th>Coro</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>

                        @foreach ($cancion as $can)
                            <tr>
                                <td>{{ $can->id }}</td>
                                <td>{{ $can->nombre }}</td>
                                <td>{{ $can->letra }}</td>
                                <td>{{ $can->musica }}</td>
                                <td>{{ $can->imagen }}</td>
                                <td>{{ $can->audio}}</td>
                                <td>{{ $can->video}}</td>
                                <td>{{ $can->estrofa_I}}</td>
                                <td>{{ $can->estrofa_II}}</td>
                                <td>{{ $can->estrofa_III}}</td>
                                <td>{{ $can->estrofa_IV}}</td>
                                <td>{{ $can->estrofa_V}}</td>
                                <td>{{ $can->coro}}</td>

                                

                             <td>
                                    @include('cancion.edit', [$can->id])
                               
                                    <form action="{{ url('cancions/' . $can->id) }}" class="d-inline formulario-eliminar"
                                        method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger eliminar" type="submit">
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
    </div>





@endsection

@section('js')
    <script>
        console.log('Hi!');
    </script>
    <script src="http://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        $('#docentes').DataTable({
            responsive: true,
            autoWidth: false,
            "language": {
                "lengthMenu": "Mostrar " +
                    `<select class="custom-selec custom-select-sm form-control form-control-sm">
            <option value='10'>10</option>
            <option value='25'>25</option>
            <option value='50'>50</option>
            <option value='100'>100</option>
            <option value='-1'>Todos</option>
        </select>` +
                    " registros por pagina",
                "zeroRecords": "Nada encontrado - Disculpa",
                "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
        });
    </script>
    <script>
        console.log('Hi!');
    </script>
    @if (session('eliminar') == 'ok')
        <script src="http://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    @endif

    @if (session('guardar') == 'ok')
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    @endif

    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
@stop
