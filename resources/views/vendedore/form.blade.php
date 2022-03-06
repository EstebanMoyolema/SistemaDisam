<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('ven_Nombre', $vendedore->ven_Nombre, ['class' => 'form-control' . ($errors->has('ven_Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Pedro Subastian']) }}
            {!! $errors->first('ven_Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido') }}
            {{ Form::text('ven_Apellido', $vendedore->ven_Apellido, ['class' => 'form-control' . ($errors->has('ven_Apellido') ? ' is-invalid' : ''), 'placeholder' => 'Montes Perez...']) }}
            {!! $errors->first('ven_Apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('ven_Telefono', $vendedore->ven_Telefono, ['class' => 'form-control' . ($errors->has('ven_Telefono') ? ' is-invalid' : ''), 'placeholder' => '099999999...']) }}
            {!! $errors->first('ven_Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Nacimiento') }}
            {{ Form::date('ven_FechaNacimiento', $vendedore->ven_FechaNacimiento, ['class' => 'form-control' . ($errors->has('ven_FechaNacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Ven Fechanacimiento']) }}
            {!! $errors->first('ven_FechaNacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>