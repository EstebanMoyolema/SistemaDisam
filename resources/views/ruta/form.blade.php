<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('rut_ID') }}
            {{ Form::text('rut_ID', $ruta->rut_ID, ['class' => 'form-control' . ($errors->has('rut_ID') ? ' is-invalid' : ''), 'placeholder' => 'Rut Id']) }}
            {!! $errors->first('rut_ID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rut_Nombre') }}
            {{ Form::text('rut_Nombre', $ruta->rut_Nombre, ['class' => 'form-control' . ($errors->has('rut_Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Rut Nombre']) }}
            {!! $errors->first('rut_Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>