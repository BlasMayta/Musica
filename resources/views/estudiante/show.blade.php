<a class="btn btn-success" data-toggle="modal" data-target="#showModal{{ $estu->id }}" href="{{ route('estudiante.show', $estu) }}"><i class="fa fa-eye"></i></a>

<div class="modal fade" id="showModal{{ $estu->id }}" tabindex="-1" aria-labelledby="staticBackdropLabel"aria-hidden="true">
    
    
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">LISTA DE ESTUDIANTES</h4>
                </div>
                <div class="modal-body">
                    {!! Form::model($estu, ['route' => ['estudiante.update', $estu], 'method' => 'put', 'class' => 'editar']) !!}
                    <div class="form-group">
                        <table class="table table-striped">
                            <tr>
                                <td>{!! Form::label('nombre', 'Nombre') !!}</td>
                                <td>{{ $estu->nombre }}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('nombre', 'Paterno') !!}</td>
                                <td>{{ $estu->paterno }}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('nombre', 'Materno') !!}</td>
                                <td>{{ $estu->materno }}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('nombre', 'ci') !!}</td>
                                <td>{{ $estu->ci }}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('nombre', 'Celular') !!}</td>
                                <td>{{ $estu->celular }}</td>
                            </tr>
                          
                            <tr>
                                <td>{!! Form::label('nombre', 'Direccion') !!}</td>
                                <td>{{ $estu->direccion }}</td </tr>

                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>


    </div>
</div>

