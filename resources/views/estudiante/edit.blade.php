<a class="btn btn-primary" data-toggle="modal" data-target="#editModal{{$estu->id}}" href="{{route('estudiante.edit', $estu)}}"><i class="fa fa-pen"></i></a>

  <div class="modal fade" id="editModal{{$estu->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content bg-info">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">ACTUALIZAR ESTUDIANTE</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::model($estu,['route'=> ['estudiante.update', $estu], 'method'=>'put', 'class'=>'editar']) !!}
            <div class="form-row">
                <div class="form-group col-md-4">
                    {!! Form::label('nombre', 'Nombre ') !!}
                    {!! Form::text('nombre', null, ['id'=>'nombre','name'=>'nombre','class'=>'form-control','onKeyUp'=>'document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('paterno', 'Paterno ') !!}
                    {!! Form::text('paterno', null, ['id'=>'paterno','name'=>'paterno','class'=>'form-control','onKeyUp'=>'document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('materno', 'Materno ') !!}
                    {!! Form::text('materno', null, ['id'=>'materno','name'=>'materno','class'=>'form-control','onKeyUp'=>'document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()']) !!}
                </div>
                 
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-2">
                    {!! Form::label('ci', 'CI') !!}
                    {!! Form::number('ci', null, ['id'=>'ci','name'=>'ci','class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('celular', 'Celular') !!}
                    {!! Form::number('celular', null, ['id'=>'celular','name'=>'celular','class'=>'form-control']) !!}
                </div>
                
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    {!! Form::label('direccion', 'Direccion') !!}
                    {!! Form::text('direccion', null, ['id'=>'direccion','name'=>'direccion','class'=>'form-control','onKeyUp'=>'document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()']) !!}
                </div>
            </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            {!! Form::submit('Actualizar Docente', ['class'=> 'btn btn-primary', 'id'=>'actualizar']) !!}
        </div>
        {!! Form::close() !!}
       </div>

    </div>
</div>