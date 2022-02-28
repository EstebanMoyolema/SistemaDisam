
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ped Id:</strong>
                            {{ $pedido->ped_ID }}
                        </div>
                        <div class="form-group">
                            <strong>Ped Fechapedido:</strong>
                            {{ $pedido->ped_FechaPedido }}
                        </div>
                        <div class="form-group">
                            <strong>Ped Subtotal:</strong>
                            {{ $pedido->ped_SubTotal }}
                        </div>
                        <div class="form-group">
                            <strong>Ped Total:</strong>
                            {{ $pedido->ped_Total }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $pedido->cliente_ID }}
                        </div>
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $pedido->producto_ID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
