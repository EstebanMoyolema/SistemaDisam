<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('prov_Nombre', $proveedore->prov_Nombre, ['class' => 'form-control' . ($errors->has('prov_Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Productor de alimento...']) }}
            {!! $errors->first('prov_Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre del Representante') }}
            {{ Form::text('prov_NombreRepresentante', $proveedore->prov_NombreRepresentante, ['class' => 'form-control' . ($errors->has('prov_NombreRepresentante') ? ' is-invalid' : ''), 'placeholder' => 'Pedro Almeida...']) }}
            {!! $errors->first('prov_NombreRepresentante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('prov_Direccion', $proveedore->prov_Direccion, ['class' => 'form-control' . ($errors->has('prov_Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Av. Simon Bolivar...']) }}
            {!! $errors->first('prov_Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::email('prov_Email', $proveedore->prov_Email, ['class' => 'form-control' . ($errors->has('prov_Email') ? ' is-invalid' : ''), 'placeholder' => 'pedro.almeida@gmail.com...']) }}
            {!! $errors->first('prov_Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('prov_Telefono', $proveedore->prov_Telefono, ['class' => 'form-control' . ($errors->has('prov_Telefono') ? ' is-invalid' : ''), 'placeholder' => '099999999...']) }}
            {!! $errors->first('prov_Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono 2') }}
            {{ Form::text('prov_Telefono2', $proveedore->prov_Telefono2, ['class' => 'form-control' . ($errors->has('prov_Telefono2') ? ' is-invalid' : ''), 'placeholder' => '0888888888...']) }}
            {!! $errors->first('prov_Telefono2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RUC') }}
            {{ Form::text('prov_RUC', $proveedore->prov_RUC, ['class' => 'form-control' . ($errors->has('prov_RUC') ? ' is-invalid' : ''), 'placeholder' => '177777777001']) }}
            {!! $errors->first('prov_RUC', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observacion') }}
            {{ Form::text('prov_Observacion', $proveedore->prov_Observacion, ['class' => 'form-control' . ($errors->has('prov_Observacion') ? ' is-invalid' : ''), 'placeholder' => 'Entregar todos los lunes...']) }}
            {!! $errors->first('prov_Observacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Activo') }}
            {{ Form::text('prov_Activo', $proveedore->prov_Activo, ['class' => 'form-control' . ($errors->has('prov_Activo') ? ' is-invalid' : ''), 'placeholder' => 'Prov Activo']) }}
            {!! $errors->first('prov_Activo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>