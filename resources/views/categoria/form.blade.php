<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre de la Categoria') }}
            {{ Form::text('cat_Nombre', $categoria->cat_Nombre, ['class' => 'form-control' . ($errors->has('cat_Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Limpieza...']) }}
            {!! $errors->first('cat_Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>