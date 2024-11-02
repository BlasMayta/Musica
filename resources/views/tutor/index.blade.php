@extends('adminlte::page')


@section('title', 'TUTOR')
@section('content')
    <div class="card-header">
        <div class="card bg-dark">
            <table width=100%>
                <tr>
                    <td align="left" width=5%>
                        <h2><i class="fas fa"></i></h2>
                    </td>
                    <td align="center">
                        <h2> TUTORES </h2>
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
              
       
                @include('tutor.create')
            </div>
        </div>

        <div class="card-header">
            <table id="usuarios" class="table table-striped">
                <thead>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Paterno</th>
                    <th>Materno</th>
                    <th>CI</th>
                    <th>Celular</th>
              
                    <th>Acciones</th>
                </thead>
                <tbody>

                    @foreach ($tutor as $tut)
                        <tr>
                            <td>{{ $tut->id }}</td>
                            <td>{{ $tut->nombre }}</td>
                            <td>{{ $tut->paterno }}</td>
                            <td>{{ $tut->materno }}</td>
                            <td>{{ $tut->ci }}</td>
                            <td>{{ $tut->celular }}</td>

                            <td>
                                @include('tutor.edit', [$tut->id])
                                @include('tutor.show', [$tut->id])
                                <form action="{{ url('tutors/' . $tut->id) }}" class="d-inline " method="post">
                           
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
            <br>
        </div>
    </div>




@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
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
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        </script>
    @endif

    @if (session('guardar') == 'ok')
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif

    <script>
        $('.editar').submit(function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: 'Do you want to save the changes?',
                        showDenyButton: true,
                        showCancelButton: true,
                        confirmButtonText: 'Save',
                        denyButtonText: `Don't save`,
                    }).then((result) => {

                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            Swal.fire('Saved!', '', 'success')
                        } else if (result.isDenied) {
                            Swal.fire('Changes are not saved', '', 'info')
                        }
                    })
    </script>
    <script>
        $('#usuarios').DataTable({
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


@stop