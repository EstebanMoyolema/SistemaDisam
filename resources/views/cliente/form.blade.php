<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Tipo de Documento') }}
            {{ Form::select('cli_TipoDocumento',array('cedula'=>'Cedula','pasaporte'=>'Pasaporte','consFinal'=>'Consumidor Final','ruc'=>'Registro Único de Contribuyentes'), $cliente->cli_TipoDocumento, ['class' => 'form-control' . ($errors->has('cli_TipoDocumento') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el Tipo de Documento']) }}
            {!! $errors->first('cli_TipoDocumento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nº Documento') }}
            {{ Form::text('cli_NoDocumento', $cliente->cli_NoDocumento, ['class' => 'form-control' . ($errors->has('cli_NoDocumento') ? ' is-invalid' : ''), 'placeholder' => '1700000000']) }}
            {!! $errors->first('cli_NoDocumento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('cli_Nombre', $cliente->cli_Nombre, ['class' => 'form-control' . ($errors->has('cli_Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Luis Alfredo...']) }}
            {!! $errors->first('cli_Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellidos') }}
            {{ Form::text('cli_Apellido', $cliente->cli_Apellido, ['class' => 'form-control' . ($errors->has('cli_Apellido') ? ' is-invalid' : ''), 'placeholder' => 'Lopez Perez...']) }}
            {!! $errors->first('cli_Apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('cli_Telefono', $cliente->cli_Telefono, ['class' => 'form-control' . ($errors->has('cli_Telefono') ? ' is-invalid' : ''), 'placeholder' => '099999999...']) }}
            {!! $errors->first('cli_Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('cli_Direccion', $cliente->cli_Direccion, ['class' => 'form-control' . ($errors->has('cli_Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Av. 6 de Di...']) }}
            {!! $errors->first('cli_Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre Comercial') }}
            {{ Form::text('cli_NombreComercial', $cliente->cli_NombreComercial, ['class' => 'form-control' . ($errors->has('cli_NombreComercial') ? ' is-invalid' : ''), 'placeholder' => 'V - Ejemplo....']) }}
            {!! $errors->first('cli_NombreComercial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('cli_Email', $cliente->cli_Email, ['class' => 'form-control' . ($errors->has('cli_Email') ? ' is-invalid' : ''), 'placeholder' => 'lopez.perez@disam.com...']) }}
            {!! $errors->first('cli_Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ruta') }}
            {{ Form::select('rutas_ID', $rutas, $cliente->rutas_ID, ['class' => 'form-control' . ($errors->has('rutas_ID') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione la Ruta']) }}
            {!! $errors->first('rutas_ID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>