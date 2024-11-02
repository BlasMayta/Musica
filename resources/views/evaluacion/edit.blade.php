<a class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $eva->id }}"
    href="{{ route('evaluacion.edit', $eva) }}"><i class="fa fa-pen"></i></a>

<div class="modal fade" id="editModal{{ $eva->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog ">
        <div class="modal-content bg-info">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">ACTUALIZAR EVALUACION</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body Form-responsive ">
                {!! Form::model($eva, ['route' => ['evaluacion.update', $eva], 'method' => 'put', 'class' => 'editar']) !!}
                <div class="row">
                    <div class="col-md-6 border-right">
                        <div class="form-row">
                            <div class="form-group">
                                {!! Form::label('materia_id', 'materia') !!}
                                <select id="materia_id" name="materia_id" class="form-control">
                                 @foreach($materia as $mat)
                                <option value="{{$mat->id}}">{{$mat->nombre}}</option>
                                @endforeach
                                </select>
                            </div>
                           
                        </div>

                        <div class="form-row">
                            <div class="form-group ">
                                {!! Form::label('titulo', 'Titulo') !!}
                                {!! Form::text('titulo', null, ['id' => 'titulo', 'name' => 'titulo', 'class' => 'form-control']) !!}
                            </div>
                            <div class="form-group ">
                                {!! Form::label('tiempo', 'Tiempo') !!}
                                {!! Form::time('tiempo', null, ['id' => 'tiempo', 'name' => 'tiempo', 'class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group ">
                                {!! Form::label('fechainicio', 'Inicio') !!}
                                {!! Form::date('fechainicio', null, ['id' => 'fechainicio', 'name' => 'fechainicio', 'class' => 'form-control']) !!}
                            </div>
                            <div class="form-group ">
                                {!! Form::label('fechafinal', 'Fin') !!}
                                {!! Form::date('fechafinal', null, ['id' => 'fechafinal', 'name' => 'fechafinal', 'class' => 'form-control']) !!}
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-row">
                            <div class="form-group ">
                                {!! Form::label('nota', 'Nota') !!}
                                {!! Form::text('nota', null, ['id' => 'nota', 'name' => 'nota', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group ">
                                {!! Form::label('descripcion', 'Descripcion') !!}
                                {!! Form::textarea('descripcion', null, ['id' => 'descripcion','name' => 'descripcion','class' => 'form-control','cols'=>'30','rows'=>'4']) !!}
                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {!! Form::submit('Actualizar Evaluacion', ['class' => 'btn btn-primary', 'id' => 'actualizar']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
