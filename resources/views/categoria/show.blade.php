
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Categoria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categorias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cat Id:</strong>
                            {{ $categoria->cat_ID }}
                        </div>
                        <div class="form-group">
                            <strong>Cat Nombre:</strong>
                            {{ $categoria->cat_Nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

