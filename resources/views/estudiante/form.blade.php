
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

<div class="form-row"> 
    <div class="form-group col-md-8 col-md-offset-2">
        <button type="submit" class="btn btn-outline-info col-md-4">{{$modo}}</button>
        <button type="button" class="btn btn-secondary col-md-4" data-dismiss="modal">Cerrar</button>
    </div>
</div>