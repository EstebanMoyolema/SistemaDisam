<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cli_ID') }}
            {{ Form::text('cli_ID', $cliente->cli_ID, ['class' => 'form-control' . ($errors->has('cli_ID') ? ' is-invalid' : ''), 'placeholder' => 'Cli Id']) }}
            {!! $errors->first('cli_ID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de documento') }}
            {{ Form::select('cli_TipoDocumento', array('cedula'=>'Cedula','pasaporte'=>'Pasaporte','consfinal'=>'Consumidor Final','ruc'=>'Registro Único de Contribuyente'), $cliente->cli_TipoDocumento, ['class' => 'form-control' . ($errors->has('cli_TipoDocumento') ? ' is-invalid' : ''), 'placeholder' => 'Cli Tipodocumento']) }}
            {!! $errors->first('cli_TipoDocumento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cli_NoDocumento') }}
            {{ Form::text('cli_NoDocumento', $cliente->cli_NoDocumento, ['class' => 'form-control' . ($errors->has('cli_NoDocumento') ? ' is-invalid' : ''), 'placeholder' => 'Cli Nodocumento']) }}
            {!! $errors->first('cli_NoDocumento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cli_Nombre') }}
            {{ Form::text('cli_Nombre', $cliente->cli_Nombre, ['class' => 'form-control' . ($errors->has('cli_Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Cli Nombre']) }}
            {!! $errors->first('cli_Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cli_Apellido') }}
            {{ Form::text('cli_Apellido', $cliente->cli_Apellido, ['class' => 'form-control' . ($errors->has('cli_Apellido') ? ' is-invalid' : ''), 'placeholder' => 'Cli Apellido']) }}
            {!! $errors->first('cli_Apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cli_Telefono') }}
            {{ Form::text('cli_Telefono', $cliente->cli_Telefono, ['class' => 'form-control' . ($errors->has('cli_Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Cli Telefono']) }}
            {!! $errors->first('cli_Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cli_Direccion') }}
            {{ Form::text('cli_Direccion', $cliente->cli_Direccion, ['class' => 'form-control' . ($errors->has('cli_Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Cli Direccion']) }}
            {!! $errors->first('cli_Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cli_NombreComercial') }}
            {{ Form::text('cli_NombreComercial', $cliente->cli_NombreComercial, ['class' => 'form-control' . ($errors->has('cli_NombreComercial') ? ' is-invalid' : ''), 'placeholder' => 'Cli Nombrecomercial']) }}
            {!! $errors->first('cli_NombreComercial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cli_Email') }}
            {{ Form::text('cli_Email', $cliente->cli_Email, ['class' => 'form-control' . ($errors->has('cli_Email') ? ' is-invalid' : ''), 'placeholder' => 'Cli Email']) }}
            {!! $errors->first('cli_Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rutas_ID') }}
            {{ Form::select('rutas_ID', $rutas, $cliente->rutas_ID, ['class' => 'form-control' . ($errors->has('rutas_ID') ? ' is-invalid' : ''), 'placeholder' => 'Rutas Id']) }}
            {!! $errors->first('rutas_ID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>