<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('prov_Nombre') }}
            {{ Form::text('prov_Nombre', $proveedore->prov_Nombre, ['class' => 'form-control' . ($errors->has('prov_Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Prov Nombre']) }}
            {!! $errors->first('prov_Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prov_NombreRepresentante') }}
            {{ Form::text('prov_NombreRepresentante', $proveedore->prov_NombreRepresentante, ['class' => 'form-control' . ($errors->has('prov_NombreRepresentante') ? ' is-invalid' : ''), 'placeholder' => 'Prov Nombrerepresentante']) }}
            {!! $errors->first('prov_NombreRepresentante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prov_Direccion') }}
            {{ Form::text('prov_Direccion', $proveedore->prov_Direccion, ['class' => 'form-control' . ($errors->has('prov_Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Prov Direccion']) }}
            {!! $errors->first('prov_Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prov_Email') }}
            {{ Form::email('prov_Email', $proveedore->prov_Email, ['class' => 'form-control' . ($errors->has('prov_Email') ? ' is-invalid' : ''), 'placeholder' => 'Prov Email']) }}
            {!! $errors->first('prov_Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prov_Telefono') }}
            {{ Form::text('prov_Telefono', $proveedore->prov_Telefono, ['class' => 'form-control' . ($errors->has('prov_Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Prov Telefono']) }}
            {!! $errors->first('prov_Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prov_Telefono2') }}
            {{ Form::text('prov_Telefono2', $proveedore->prov_Telefono2, ['class' => 'form-control' . ($errors->has('prov_Telefono2') ? ' is-invalid' : ''), 'placeholder' => 'Prov Telefono2']) }}
            {!! $errors->first('prov_Telefono2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prov_Telefono3') }}
            {{ Form::text('prov_Telefono3', $proveedore->prov_Telefono3, ['class' => 'form-control' . ($errors->has('prov_Telefono3') ? ' is-invalid' : ''), 'placeholder' => 'Prov Telefono3']) }}
            {!! $errors->first('prov_Telefono3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prov_RUC') }}
            {{ Form::text('prov_RUC', $proveedore->prov_RUC, ['class' => 'form-control' . ($errors->has('prov_RUC') ? ' is-invalid' : ''), 'placeholder' => 'Prov Ruc']) }}
            {!! $errors->first('prov_RUC', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prov_Observacion') }}
            {{ Form::text('prov_Observacion', $proveedore->prov_Observacion, ['class' => 'form-control' . ($errors->has('prov_Observacion') ? ' is-invalid' : ''), 'placeholder' => 'Prov Observacion']) }}
            {!! $errors->first('prov_Observacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prov_Activo') }}
            {{ Form::text('prov_Activo', $proveedore->prov_Activo, ['class' => 'form-control' . ($errors->has('prov_Activo') ? ' is-invalid' : ''), 'placeholder' => 'Prov Activo']) }}
            {!! $errors->first('prov_Activo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>