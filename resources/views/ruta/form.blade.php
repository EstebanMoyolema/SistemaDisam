<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Escriba la Ruta') }}
            {{ Form::text('rut_Nombre', $ruta->rut_Nombre, ['class' => 'form-control' . ($errors->has('rut_Nombre') ? ' is-invalid' : ''), 'placeholder' => 'El Valle...']) }}
            {!! $errors->first('rut_Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>