@extends('adminlte::page')
@section('content_header')
    <h1>Creación de Vendedores</h1>
@stop
@section('content')
    <p>Vendedores</p>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Vendedores</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vendedores.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $vendedore->ven_Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $vendedore->ven_Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $vendedore->ven_Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Nacimiento:</strong>
                            {{ $vendedore->ven_FechaNacimiento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
