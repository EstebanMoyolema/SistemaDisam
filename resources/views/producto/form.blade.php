<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo') }}
            {{ Form::text('pro_Codigo', $producto->pro_Codigo, ['class' => 'form-control' . ($errors->has('pro_Codigo') ? ' is-invalid' : ''), 'placeholder' => 'TO0600']) }}
            {!! $errors->first('pro_Codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('pro_Nombre', $producto->pro_Nombre, ['class' => 'form-control' . ($errors->has('pro_Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Jugo de Mora...']) }}
            {!! $errors->first('pro_Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('pro_Descripcion', $producto->pro_Descripcion, ['class' => 'form-control' . ($errors->has('pro_Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Sobre especial de 500g + 10%...']) }}
            {!! $errors->first('pro_Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Peso') }}
            {{ Form::text('pro_Peso', $producto->pro_Peso, ['class' => 'form-control' . ($errors->has('pro_Peso') ? ' is-invalid' : ''), 'placeholder' => '500g...']) }}
            {!! $errors->first('pro_Peso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio de Compra') }}
            {{ Form::text('pro_PrecioCompra', $producto->pro_PrecioCompra, ['class' => 'form-control' . ($errors->has('pro_PrecioCompra') ? ' is-invalid' : ''), 'placeholder' => '9999.99']) }}
            {!! $errors->first('pro_PrecioCompra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Elaboracion') }}
            {{ Form::date('pro_FechaElaboracion', $producto->pro_FechaElaboracion, ['class' => 'form-control' . ($errors->has('pro_FechaElaboracion') ? ' is-invalid' : ''), 'placeholder' => 'Pro Fechaelaboracion']) }}
            {!! $errors->first('pro_FechaElaboracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Expiracion') }}
            {{ Form::date('pro_FechaExpiracion', $producto->pro_FechaExpiracion, ['class' => 'form-control' . ($errors->has('pro_FechaExpiracion') ? ' is-invalid' : ''), 'placeholder' => 'Pro Fechaexpiracion']) }}
            {!! $errors->first('pro_FechaExpiracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Stock') }}
            {{ Form::text('pro_Stock', $producto->pro_Stock, ['class' => 'form-control' . ($errors->has('pro_Stock') ? ' is-invalid' : ''), 'placeholder' => 'Pro Stock']) }}
            {!! $errors->first('pro_Stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descontinuado') }}
            {{ Form::checkbox('pro_Descontinuado', $producto->pro_Descontinuado, ['class' => 'form-control' . ($errors->has('pro_Descontinuado') ? ' is-invalid' : ''), 'placeholder' => 'Descontinuado']) }}
            {!! $errors->first('pro_Descontinuado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Producto Vendido') }}
            {{ Form::text('pro_Vendido', $producto->pro_Vendido, ['class' => 'form-control' . ($errors->has('pro_Vendido') ? ' is-invalid' : ''), 'placeholder' => 'Producto Vendido']) }}
            {!! $errors->first('pro_Vendido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoria') }}
            {{ Form::select('categoria_ID', $categoria , $producto->categoria_ID, ['class' => 'form-control' . ($errors->has('categoria_ID') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione la Categoria']) }}
            {!! $errors->first('categoria_ID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('proveedor') }}
            {{ Form::select('proveedor_ID', $proveedor , $producto->proveedor_ID, ['class' => 'form-control' . ($errors->has('proveedor_ID') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el Proveedor']) }}
            {!! $errors->first('proveedor_ID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>