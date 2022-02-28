
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ruta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rutas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rut Id:</strong>
                            {{ $ruta->rut_ID }}
                        </div>
                        <div class="form-group">
                            <strong>Rut Nombre:</strong>
                            {{ $ruta->rut_Nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
