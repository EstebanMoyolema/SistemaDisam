
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Proveedores</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Prov Id:</strong>
                            {{ $proveedores->prov_ID }}
                        </div>
                        <div class="form-group">
                            <strong>Prov Nombre:</strong>
                            {{ $proveedores->prov_Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Prov Nombrerepresentante:</strong>
                            {{ $proveedores->prov_NombreRepresentante }}
                        </div>
                        <div class="form-group">
                            <strong>Prov Direccion:</strong>
                            {{ $proveedores->prov_Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Prov Email:</strong>
                            {{ $proveedores->prov_Email }}
                        </div>
                        <div class="form-group">
                            <strong>Prov Telefono:</strong>
                            {{ $proveedores->prov_Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Prov Telefono2:</strong>
                            {{ $proveedores->prov_Telefono2 }}
                        </div>
                        <div class="form-group">
                            <strong>Prov Telefono3:</strong>
                            {{ $proveedores->prov_Telefono3 }}
                        </div>
                        <div class="form-group">
                            <strong>Prov Ruc:</strong>
                            {{ $proveedore->prov_RUC }}
                        </div>
                        <div class="form-group">
                            <strong>Prov Observacion:</strong>
                            {{ $proveedores->prov_Observacion }}
                        </div>
                        <div class="form-group">
                            <strong>Prov Activo:</strong>
                            {{ $proveedores->prov_Activo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
