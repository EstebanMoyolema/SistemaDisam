@extends('adminlte::page')
@section('content_header')
    <h1>Creación de Clientes</h1>
@stop
@section('content')
    <p>Clientes</p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cliente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Cli Id</th>
										<th>Cli Tipodocumento</th>
										<th>Cli Nodocumento</th>
										<th>Cli Nombre</th>
										<th>Cli Apellido</th>
										<th>Cli Telefono</th>
										<th>Cli Direccion</th>
										<th>Cli Nombrecomercial</th>
										<th>Cli Email</th>
										<th>Rutas Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td hidden>{{ $cliente->cli_ID }}</td>
											<td>{{ $cliente->cli_TipoDocumento }}</td>
											<td>{{ $cliente->cli_NoDocumento }}</td>
											<td>{{ $cliente->cli_Nombre }}</td>
											<td>{{ $cliente->cli_Apellido }}</td>
											<td>{{ $cliente->cli_Telefono }}</td>
											<td>{{ $cliente->cli_Direccion }}</td>
											<td>{{ $cliente->cli_NombreComercial }}</td>
											<td>{{ $cliente->cli_Email }}</td>
											<td>{{ $cliente->ruta->rut_Nombre}}</td>

                                            {{-- <td>
                                                <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('clientes.show',$cliente->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('clientes.edit',$cliente->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@stop