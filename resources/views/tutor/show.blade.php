<a class="btn btn-success" data-toggle="modal" data-target="#showModal{{ $tut->id }}"href="{{ route('docente.show', $tut) }}"><i class="fa fa-eye"></i></a>
<div class="modal fade" id="showModal{{ $tut->id }}" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">IFORMACION DEL DOCENTE</h4>
                </div>
                <div class="modal-body">
                    {!! Form::model($tut, ['route' => ['docente.update', $tut], 'method' => 'put', 'class' => 'editar']) !!}
                    <div class="form-group">
                        <table class="table table-striped">
                            <tr>
                                <td>{!! Form::label('nombre', 'Nombre') !!}</td>
                                <td>{{ $tut->nombre }}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('nombre', 'Paterno') !!}</td>
                                <td>{{ $tut->paterno }}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('nombre', 'Materno') !!}</td>
                                <td>{{ $tut->materno }}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('nombre', 'ci') !!}</td>
                                <td>{{ $tut->ci }}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('nombre', 'Celular') !!}</td>
                                <td>{{ $tut->celular }}</td>
                            </tr>
                          
                            
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
