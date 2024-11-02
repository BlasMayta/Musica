<!-- <a class="btn btn-success" data-toggle="modal" data-target="#createModal" href=""><i class="fas fa-plus-square"></i></a> -->
<a class="btn btn-success" data-toggle="modal" data-target="#showModal{{ $doc->id }}" href="{{ route('docente.show', $doc) }}"><i class="fa fa-eye"></i></a>


<div class="modal fade" id="showModal{{ $doc->id }}" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel"> INFORMACION DEL DOCENTE</h4>    
            </div>
            <div class="modal-body">
                     {!! Form::model($doc, ['route' => ['docente.update', $doc], 'method' => 'put', 'class' => 'editar']) !!}
                    <div class="form-group">
                        <table class="table table-striped">
                            <tr>
                                <td>{!! Form::label('nombre', 'Nombre') !!}</td>
                                <td>{{ $doc->nombre }}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('nombre', 'Paterno') !!}</td>
                                <td>{{ $doc->paterno }}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('nombre', 'Materno') !!}</td>
                                <td>{{ $doc->materno }}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('nombre', 'ci') !!}</td>
                                <td>{{ $doc->ci }}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('nombre', 'Celular') !!}</td>
                                <td>{{ $doc->celular }}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('nombre', 'Correo') !!}</td>
                                <td>{{ $doc->correo }}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('nombre', 'Direccion') !!}</td>
                                <td>{{ $doc->direccion }}</td </tr>

                        </table>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                    </div>



             </div>

        </div>

    </div>
</div>
