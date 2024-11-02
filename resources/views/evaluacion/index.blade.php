@extends('adminlte::page')


@section('title', 'EVALUACION')
@section('content')
    <div class="card-header">
        <div class="card bg-dark">
            <table width=100%>
                <tr>
                    <td align="left" width=5%>
                        <h2><i class="fas fa"></i></h2>
                    </td>
                    <td align="center">
                        <h2> EVALUCION </h2>
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
                @include('evaluacion.create')

            </div>
            <div class="table-responsive">
                <table class="table table-striped" id="usuarios">
                    <thead class="table-dark">
                        <thead>
                            <th>id</th>
                            <th>Maateria</th>
                            <th>Nota</th>
                            <th>titulo</th>
                            <th>fecha Inicio</th>
                            <th>Fecha final</th>
                            <th>Tiempo</th>
                            <th>Descripcion</th>

                            <th>Acciones</th>
                        </thead>
                    <tbody>

                        @foreach ($evaluacion as $eva)
                            <tr>
                                <td>{{ $eva->id }}</td>

                                @foreach ($materia as $mat)
                                    @if ($mat->id == $eva->materia_id)
                                        <td>{{ $mat->nombre }}</td>
                                    @endif
                                @endforeach

                                <td>{{ $eva->nota }}</td>
                                <td>{{ $eva->titulo }}</td>
                                <td>{{ $eva->fechainicio }}</td>
                                <td>{{ $eva->fechafinal }}</td>
                                <td>{{ $eva->tiempo }}</td>
                                <td>{{ $eva->descripcion }}</td>


                                <td>
                                    @include('evaluacion.edit')
                                   
                                

                                    <form action="{{ url('evaluacions/' . $eva->id) }}" class="d-inline " method="post">
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
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
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
        $('eliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'QUIERES BORRAR?',
                text: "Estas seguro de borrar!!!!!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }

            })

        });
    </script>
    @if (session('eliminar') == 'ok')
        <script>
            console.log('Hi!');
        </script>
    @endif

    @if (session('guardar') == 'ok')
        <script src="http://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    @endif

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>


@stop
