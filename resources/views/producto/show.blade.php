
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Pro Id:</strong>
                            {{ $producto->pro_ID }}
                        </div>
                        <div class="form-group">
                            <strong>Pro Nombre:</strong>
                            {{ $producto->pro_Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Pro Descripcion:</strong>
                            {{ $producto->pro_Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Pro Peso:</strong>
                            {{ $producto->pro_Peso }}
                        </div>
                        <div class="form-group">
                            <strong>Pro Preciocompra:</strong>
                            {{ $producto->pro_PrecioCompra }}
                        </div>
                        <div class="form-group">
                            <strong>Pro Fechaelaboracion:</strong>
                            {{ $producto->pro_FechaElaboracion }}
                        </div>
                        <div class="form-group">
                            <strong>Pro Fechaexpiracion:</strong>
                            {{ $producto->pro_FechaExpiracion }}
                        </div>
                        <div class="form-group">
                            <strong>Pro Precioventa:</strong>
                            {{ $producto->pro_PrecioVenta }}
                        </div>
                        <div class="form-group">
                            <strong>Pro Stock:</strong>
                            {{ $producto->pro_Stock }}
                        </div>
                        <div class="form-group">
                            <strong>Pro Descontinuado:</strong>
                            {{ $producto->pro_Descontinuado }}
                        </div>
                        <div class="form-group">
                            <strong>Pro Imagen:</strong>
                            {{ $producto->pro_Imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Pro Vendido:</strong>
                            {{ $producto->pro_Vendido }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $producto->categoria_ID }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedor Id:</strong>
                            {{ $producto->proveedor_ID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

