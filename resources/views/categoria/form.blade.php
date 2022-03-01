<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cat_Nombre') }}
            {{ Form::text('cat_Nombre', $categoria->cat_Nombre, ['class' => 'form-control' . ($errors->has('cat_Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Cat Nombre']) }}
            {!! $errors->first('cat_Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>