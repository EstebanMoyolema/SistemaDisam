@extends('layouts.app')

@section('template_title')
    {{ $vendedore->name ?? 'Show Vendedore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Vendedore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vendedores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ven Nombre:</strong>
                            {{ $vendedore->ven_Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ven Apellido:</strong>
                            {{ $vendedore->ven_Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Ven Telefono:</strong>
                            {{ $vendedore->ven_Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Ven Fechanacimiento:</strong>
                            {{ $vendedore->ven_FechaNacimiento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
