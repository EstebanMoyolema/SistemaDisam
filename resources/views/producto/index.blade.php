
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Producto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Pro Id</th>
										<th>Pro Nombre</th>
										<th>Pro Descripcion</th>
										<th>Pro Peso</th>
										<th>Pro Preciocompra</th>
										<th>Pro Fechaelaboracion</th>
										<th>Pro Fechaexpiracion</th>
										<th>Pro Precioventa</th>
										<th>Pro Stock</th>
										<th>Pro Descontinuado</th>
										<th>Pro Imagen</th>
										<th>Pro Vendido</th>
										<th>Categoria Id</th>
										<th>Proveedor Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $producto->pro_ID }}</td>
											<td>{{ $producto->pro_Nombre }}</td>
											<td>{{ $producto->pro_Descripcion }}</td>
											<td>{{ $producto->pro_Peso }}</td>
											<td>{{ $producto->pro_PrecioCompra }}</td>
											<td>{{ $producto->pro_FechaElaboracion }}</td>
											<td>{{ $producto->pro_FechaExpiracion }}</td>
											<td>{{ $producto->pro_PrecioVenta }}</td>
											<td>{{ $producto->pro_Stock }}</td>
											<td>{{ $producto->pro_Descontinuado }}</td>
											<td>{{ $producto->pro_Imagen }}</td>
											<td>{{ $producto->pro_Vendido }}</td>
											<td>{{ $producto->categoria_ID }}</td>
											<td>{{ $producto->proveedor_ID }}</td>

                                            <td>
                                                <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('productos.show',$producto->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('productos.edit',$producto->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
