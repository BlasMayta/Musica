
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <form action="" id="manage_survey">
                <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">
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
             
                <div class="form-row">
                    <div class="form-group col-md-8 col-md-offset-2">
                        <button type="submit" class="btn btn-outline-info col-md-4">{{ $modo }}</button>
                        <button type="button" class="btn btn-secondary col-md-4" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('#manage_survey').submit(function(e) {
        e.preventDefault()
        $('input').removeClass("border-danger")
        start_load()
        $('#msg').html('')
        $.ajax({
            url: 'ajax.php?action=save_survey',
            data: new FormData($(this)[0]),
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST',
            success: function(resp) {
                if (resp == 1) {
                    alert_toast('Datos guardados correctamente', "success");
                    setTimeout(function() {
                        location.replace('index.php?page=survey_list')
                    }, 1500)
                }
            }
        })
    })
</script>


