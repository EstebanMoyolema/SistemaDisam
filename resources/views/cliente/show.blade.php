
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cli Id:</strong>
                            {{ $cliente->cli_ID }}
                        </div>
                        <div class="form-group">
                            <strong>Cli Tipodocumento:</strong>
                            {{ $cliente->cli_TipoDocumento }}
                        </div>
                        <div class="form-group">
                            <strong>Cli Nodocumento:</strong>
                            {{ $cliente->cli_NoDocumento }}
                        </div>
                        <div class="form-group">
                            <strong>Cli Nombre:</strong>
                            {{ $cliente->cli_Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cli Apellido:</strong>
                            {{ $cliente->cli_Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Cli Telefono:</strong>
                            {{ $cliente->cli_Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Cli Direccion:</strong>
                            {{ $cliente->cli_Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Cli Nombrecomercial:</strong>
                            {{ $cliente->cli_NombreComercial }}
                        </div>
                        <div class="form-group">
                            <strong>Cli Email:</strong>
                            {{ $cliente->cli_Email }}
                        </div>
                        <div class="form-group">
                            <strong>Rutas Id:</strong>
                            {{ $cliente->rutas_ID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
