@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection
@section('title', 'Formulario')
@section('content')
    <div class="card card-dark">

        <div class="card-header">
            <table width=100%>
                <tr>
                    <td align="left" width=5%>
                        <h2><i class="fas fa-hdd"></i></h2>
                    </td>
                    <td align="center">
                        <h2>FORMULARIO</h2>
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
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-outline card-primary">
                            <div class="card-header">

                                <form action="">
                                    <input class="form-control form-control-lg" type="text"
                                        placeholder="Fornulario sin título" aria-label=".form-control-lg example">
                                    <br>


                                    <input class="form-control" type="text" placeholder="Descripccion del formulario"
                                        aria-label="default input example">

                                </form>


                            </div>

                        </div>

                        <div class="col-md-12">
                            <form action="" id="manage-sort">
                                <div class="card-body ui-sortable">
                                    <div class="callout callout-info">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span class="dropleft float-right">
                                                    <a class="fa fa-ellipsis-v text-dark" href="javascript:void(0)"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"></a>
                                                    <div class="dropdown-menu" style="">
                                                        <a class="dropdown-item edit_question text-dark"
                                                            href="javascript:void(0)">Editar</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item delete_question text-dark"
                                                            href="javascript:void(0)">Eliminar</a>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <h5> </h5>
                                        <div class="col-md-12">

                                            <div class=" card card-header bg-white">
                                                <form id="formulario">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="text" class="form-control"
                                                                placeholder="Porfavor ingrese la Pregunta"
                                                                aria-label="First name" id="pregunta" name="pregunta"
                                                                required>
                                                        </div>

                                                        <div class="col-select form-select-lg mb-3">

                                                            <select id="tipo_respuesta" name="tipo_respuesta"
                                                                onchange="mostrarRespuesta()"">
                                                                <option value="texto">Respuesta corta</option>
                                                                <option value="checkbox">Casillas</option>
                                                                <option value="radio">Varias opciones</option>

                                                            </select><br><br>
                                                          
                                                        </div>
                                                    </div>

                                                    <div id="opciones_respuesta" style="display:none;">
                                                        <label>Opciones de Respuesta:</label><br>
                                                        <div id="opciones"></div>
                                                        <button type="button" id="agregarOpcion">Agregar Opción</button>
                                                    </div>
                                            
                                                    <input type="submit" value="Enviar">


                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    @endsection

    @section('js')

        <script src=" https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>



        @if (session('eliminar') == 'ok')
            <script>
                Swal.fire(
                    'Eliminado!',
                    'El registro se elimino con éxito.',
                    'success'
                )
            </script>
        @endif

        @if (session('nuevo') == 'ok')
            <script>
                Swal.fire(
                    'Guardado!',
                    'El registro se guardo con éxito.',
                    'success'
                )
            </script>
        @endif

        @if (session('actualizar') == 'ok')
            <script>
                Swal.fire(
                    'Actualizado!',
                    'El registro se actualizo con éxito.',
                    'success'
                )
            </script>
        @endif

        <script>
            function mostrarRespuesta() {
                var tipoRespuesta = document.getElementById("tipo_respuesta").value;
                var opcionesDiv = document.getElementById("opciones_respuesta");
                var opciones = document.getElementById("opciones");
    
                if (tipoRespuesta === "checkbox" || tipoRespuesta === "radio") {
                    opcionesDiv.style.display = "block";
                    opciones.innerHTML = '';
                    agregarOpcion(); // Agregar una opción inicialmente
                } else if (tipoRespuesta === "texto") {
                    opcionesDiv.style.display = "block";
                    opciones.innerHTML = '';
                    agregarTexto(); // Agregar un campo de texto para respuesta de texto
                } else {
                    opcionesDiv.style.display = "none";
                    opciones.innerHTML = '';
                }
            }
    
            function agregarOpcion() {
                var opciones = document.getElementById("opciones");
                var divOpcion = document.createElement("div");
                var inputOpcion = document.createElement("input");
                inputOpcion.type = "text";
                inputOpcion.name = "opcion[]";
                inputOpcion.placeholder = "Texto de opción";
                
                if (document.getElementById("tipo_respuesta").value === "checkbox") {
                    var checkbox = document.createElement("input");
                    checkbox.type = "checkbox";
                    checkbox.name = "checkbox[]";
                    divOpcion.appendChild(checkbox);
                } else if (document.getElementById("tipo_respuesta").value === "radio") {
                    var radio = document.createElement("input");
                    radio.type = "radio";
                    radio.name = "radio[]";
                    divOpcion.appendChild(radio);
                }
    
                var eliminar = document.createElement("button");
                eliminar.type = "button";
                eliminar.textContent = "Eliminar";
                eliminar.onclick = function() {
                    opciones.removeChild(divOpcion);
                };
                
                divOpcion.appendChild(inputOpcion);
                divOpcion.appendChild(eliminar);
                opciones.appendChild(divOpcion);
            }
    
            function agregarTexto() {
                var opciones = document.getElementById("opciones");
                var divTexto = document.createElement("div");
                var inputTexto = document.createElement("input");
                inputTexto.type = "text";
                inputTexto.name = "respuesta_texto";
                inputTexto.placeholder = "Respuesta de texto";
                divTexto.appendChild(inputTexto);
                opciones.appendChild(divTexto);
            }
    
            document.getElementById("agregarOpcion").addEventListener("click", agregarOpcion);
    
            document.getElementById("formulario").addEventListener("submit", function (e) {
                e.preventDefault();
                var pregunta = document.getElementById("pregunta").value;
                var tipoRespuesta = document.getElementById("tipo_respuesta").value;
                var opciones = [];
    
                if (tipoRespuesta === "checkbox" || tipoRespuesta === "radio") {
                    var opcionesElems = document.getElementsByName("opcion[]");
    
                    for (var i = 0; i < opcionesElems.length; i++) {
                        var opcion = opcionesElems[i].value;
                        opciones.push(opcion);
                    }
                } else if (tipoRespuesta === "texto") {
                    var respuestaTexto = document.getElementsByName("respuesta_texto")[0].value;
                    opciones.push(respuestaTexto);
                }
    
                // Aquí puedes hacer algo con la pregunta y las respuestas seleccionadas
                console.log("Pregunta: " + pregunta);
                console.log("Tipo de Respuesta: " + tipoRespuesta);
                console.log("Respuestas: ");
                opciones.forEach(function(opcion) {
                    console.log("Opción: " + opcion);
                });
            });
        </script>

        <script>
            $('.formulario-eliminar').submit(function(e) {
                e.preventDefault();
                Swal.fire({
                    title: '¿Estas seguro?',
                    text: "Este registro se eliminara definitivamente!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminar!',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                })
            });
        </script>


        <script>
            $('#datosHdd').DataTable({
                responsive: false,
                autoWidth: false,
                "order": [
                    [0, 'desc']
                ],
                "language": {
                    "lengthMenu": "Mostrar " +
                        `<select class="custom-selec custom-select-sm form-control form-control-sm">
                                        <option value = '10'>10</option>
                                        <option value = '25'>25</option>
                                        <option value = '50'>50</option>
                                        <option value = '100'>100</option>
                                        <option value = '-1'>Todos</option>
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
    @endsection
