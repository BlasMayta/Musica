<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('temario', 'Temario ') !!}
        {!! Form::text('temario', null, ['id'=>'temario','name'=>'temario','class'=>'form-control']) !!}
    </div>

</div>

<div class="form-row"> 
    <div class="form-group col-md-12 col-md-offset-2">
        <button type="submit" class="btn btn-outline-info col-md-6">{{$modo}}</button>
        <button type="button" class="btn btn-secondary col-md-6" data-dismiss="modal">Cerrar</button>
    </div>
</div>