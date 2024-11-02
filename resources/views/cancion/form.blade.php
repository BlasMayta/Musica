
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre', null, ['id'=>'nombre','name'=>'nombre','class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('letra', 'Letra') !!}
        {!! Form::text('letra', null, ['id'=>'letra','name'=>'letra','class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('musica', 'Musica') !!}
        {!! Form::text('musica', null, ['id'=>'musica','name'=>'musica','class'=>'form-control']) !!}
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('imagen', 'Imagen') !!}
        <input type="file" id="imagen" name="imagen" accept=".jpg, .jpeg, .png"  />

    </div>
    

    <div class="form-group col-md-4">
        {!! Form::label('audio', 'Audio') !!}
        <input type="file" id="audio" name="audio" accept="audio/*"  />
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('video', 'Video') !!}
        <input type="file" id="video" name="video" accept="video/*"  />
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        


        {!! Form::label('estrofa_I', 'Estrofa I') !!}
        {!! Form::text('estrofa_I', null, ['id'=>'estrofa_I','name'=>'estrofa_I','class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('estrofa_II', 'Estrofa II') !!}
        {!! Form::text('estrofa_II', null, ['id'=>'estrofa_II','name'=>'estrofa_II','class'=>'form-control']) !!}
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('estrofa_III', 'Estrofa III') !!}
        {!! Form::text('estrofa_III', null, ['id'=>'estrofa_III','name'=>'estrofa_III','class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('estrofa_IV', 'Estrofa IV') !!}
        {!! Form::text('estrofa_IV', null, ['id'=>'estrofa_IV','name'=>'estrofa_IV','class'=>'form-control']) !!}
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('estrofa_V', 'Estrofa V') !!}
        {!! Form::text('estrofa_V', null, ['id'=>'estrofa_V','name'=>'estrofa_V','class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('coro', 'Coro') !!}
        {!! Form::text('coro', null, ['id'=>'coro','name'=>'coro','class'=>'form-control']) !!}
    </div>
</div>

<div class="form-row"> 
    <div class="form-group col-md-8 col-md-offset-2">
        <button type="submit" class="btn btn-outline-info col-md-4">{{$modo}}</button>
        <button type="button" class="btn btn-secondary col-md-4" data-dismiss="modal">Cerrar</button>
    </div>
</div>