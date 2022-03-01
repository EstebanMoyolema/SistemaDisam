<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('pro_Nombre') }}
            {{ Form::text('pro_Nombre', $producto->pro_Nombre, ['class' => 'form-control' . ($errors->has('pro_Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Pro Nombre']) }}
            {!! $errors->first('pro_Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pro_Descripcion') }}
            {{ Form::text('pro_Descripcion', $producto->pro_Descripcion, ['class' => 'form-control' . ($errors->has('pro_Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Pro Descripcion']) }}
            {!! $errors->first('pro_Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pro_Peso') }}
            {{ Form::text('pro_Peso', $producto->pro_Peso, ['class' => 'form-control' . ($errors->has('pro_Peso') ? ' is-invalid' : ''), 'placeholder' => 'Pro Peso']) }}
            {!! $errors->first('pro_Peso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pro_PrecioCompra') }}
            {{ Form::text('pro_PrecioCompra', $producto->pro_PrecioCompra, ['class' => 'form-control' . ($errors->has('pro_PrecioCompra') ? ' is-invalid' : ''), 'placeholder' => 'Pro Preciocompra']) }}
            {!! $errors->first('pro_PrecioCompra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pro_FechaElaboracion') }}
            {{ Form::date('pro_FechaElaboracion', $producto->pro_FechaElaboracion, ['class' => 'form-control' . ($errors->has('pro_FechaElaboracion') ? ' is-invalid' : ''), 'placeholder' => 'Pro Fechaelaboracion']) }}
            {!! $errors->first('pro_FechaElaboracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pro_FechaExpiracion') }}
            {{ Form::date('pro_FechaExpiracion', $producto->pro_FechaExpiracion, ['class' => 'form-control' . ($errors->has('pro_FechaExpiracion') ? ' is-invalid' : ''), 'placeholder' => 'Pro Fechaexpiracion']) }}
            {!! $errors->first('pro_FechaExpiracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pro_PrecioVenta') }}
            {{ Form::text('pro_PrecioVenta', $producto->pro_PrecioVenta, ['class' => 'form-control' . ($errors->has('pro_PrecioVenta') ? ' is-invalid' : ''), 'placeholder' => 'Pro Precioventa']) }}
            {!! $errors->first('pro_PrecioVenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pro_Stock') }}
            {{ Form::text('pro_Stock', $producto->pro_Stock, ['class' => 'form-control' . ($errors->has('pro_Stock') ? ' is-invalid' : ''), 'placeholder' => 'Pro Stock']) }}
            {!! $errors->first('pro_Stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pro_Descontinuado') }}
            {{ Form::checkbox('pro_Descontinuado', $producto->pro_Descontinuado, ['class' => 'form-control' . ($errors->has('pro_Descontinuado') ? ' is-invalid' : ''), 'placeholder' => 'Pro Descontinuado']) }}
            {!! $errors->first('pro_Descontinuado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pro_Imagen') }}
            {{ Form::text('pro_Imagen', $producto->pro_Imagen, ['class' => 'form-control' . ($errors->has('pro_Imagen') ? ' is-invalid' : ''), 'placeholder' => 'Pro Imagen']) }}
            {!! $errors->first('pro_Imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pro_Vendido') }}
            {{ Form::text('pro_Vendido', $producto->pro_Vendido, ['class' => 'form-control' . ($errors->has('pro_Vendido') ? ' is-invalid' : ''), 'placeholder' => 'Pro Vendido']) }}
            {!! $errors->first('pro_Vendido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoria_ID') }}
            {{ Form::select('categoria_ID', $categoria , $producto->categoria_ID, ['class' => 'form-control' . ($errors->has('categoria_ID') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }}
            {!! $errors->first('categoria_ID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('proveedor_ID') }}
            {{ Form::select('proveedor_ID', $proveedor , $producto->proveedor_ID, ['class' => 'form-control' . ($errors->has('proveedor_ID') ? ' is-invalid' : ''), 'placeholder' => 'Proveedor Id']) }}
            {!! $errors->first('proveedor_ID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>