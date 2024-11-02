
<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('nombre', 'Nombre ') !!}
        {!! Form::text('nombre', null, ['id'=>'nombre','name'=>'nombre','class'=>'form-control','onKeyUp'=>'document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()']) !!}
    </div>

</div>

<div class="form-row"> 
    <div class="form-group col-md-12 col-md-offset-2">
        <button type="submit" class="btn btn-outline-info col-md-6">{{$modo}}</button>
        <button type="button" class="btn btn-secondary col-md-6" data-dismiss="modal">Cerrar</button>
    </div>
</div>