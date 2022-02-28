<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ped_ID') }}
            {{ Form::text('ped_ID', $pedido->ped_ID, ['class' => 'form-control' . ($errors->has('ped_ID') ? ' is-invalid' : ''), 'placeholder' => 'Ped Id']) }}
            {!! $errors->first('ped_ID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ped_FechaPedido') }}
            {{ Form::text('ped_FechaPedido', $pedido->ped_FechaPedido, ['class' => 'form-control' . ($errors->has('ped_FechaPedido') ? ' is-invalid' : ''), 'placeholder' => 'Ped Fechapedido']) }}
            {!! $errors->first('ped_FechaPedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ped_SubTotal') }}
            {{ Form::text('ped_SubTotal', $pedido->ped_SubTotal, ['class' => 'form-control' . ($errors->has('ped_SubTotal') ? ' is-invalid' : ''), 'placeholder' => 'Ped Subtotal']) }}
            {!! $errors->first('ped_SubTotal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ped_Total') }}
            {{ Form::text('ped_Total', $pedido->ped_Total, ['class' => 'form-control' . ($errors->has('ped_Total') ? ' is-invalid' : ''), 'placeholder' => 'Ped Total']) }}
            {!! $errors->first('ped_Total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cliente_ID') }}
            {{ Form::text('cliente_ID', $pedido->cliente_ID, ['class' => 'form-control' . ($errors->has('cliente_ID') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }}
            {!! $errors->first('cliente_ID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('producto_ID') }}
            {{ Form::text('producto_ID', $pedido->producto_ID, ['class' => 'form-control' . ($errors->has('producto_ID') ? ' is-invalid' : ''), 'placeholder' => 'Producto Id']) }}
            {!! $errors->first('producto_ID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>