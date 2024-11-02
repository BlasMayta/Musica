
<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('letra', 'Estrofa') !!}
        {!! Form::textarea('letra', null, ['id'=>'letra','name'=>'letra','class'=>'form-control','maxlength'=>'10000']) !!}
    </div> 
</div>

<div class="form-row"> 
    <div class="form-group col-md-8 col-md-offset-2">
        <button type="submit" class="btn btn-outline-info col-md-4">{{$modo}}</button>
        <button type="button" class="btn btn-secondary col-md-4" data-dismiss="modal">Cerrar</button>
    </div>
</div>