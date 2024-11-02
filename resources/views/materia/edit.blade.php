<a class="btn btn-primary" data-toggle="modal" data-target="#editModal{{$mat->id}}" href="{{route('estudiante.edit', $mat)}}"><i class="fa fa-pen"></i></a>

  <div class="modal fade" id="editModal{{$mat->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content bg-info">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">ACTUALIZAR MATERIA</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::model($mat,['route'=> ['materia.update', $mat], 'method'=>'put', 'class'=>'editar']) !!}
            <div class="form-row">
                <div class="form-group col-md-4">
                    {!! Form::label('nombre', 'Nombre ') !!}
                    {!! Form::text('nombre', null, ['id'=>'nombre','name'=>'nombre','class'=>'form-control','onKeyUp'=>'document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()']) !!}
                </div>
               
                 
            </div>
    
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            {!! Form::submit('Actualizar Materia', ['class'=> 'btn btn-primary', 'id'=>'actualizar']) !!}
        </div>
        {!! Form::close() !!}
       </div>

    </div>
</div>