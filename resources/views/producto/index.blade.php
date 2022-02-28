@section('titlePage')
DISAM | Productos
@endsection
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        @section('opcionesMenu')
        <x-nav-link :href="route('productos.index')" :active="request()->routeIs('productos')">
            {{ __('Productos') }}
        </x-nav-link>
        <x-nav-link :href="route('categorias.index')" :active="request()->routeIs('categorias')">
            {{ __('Categorias') }}
        </x-nav-link>
        <x-nav-link :href="route('proveedores.index')" :active="request()->routeIs('proveedores')">
            {{ __('Proveedores') }}
        </x-nav-link>
        @endsection
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-7">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"> 
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listado de Productos') }}
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
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        
										<th style="display:none;">Pro Id</th>
										<th scope="col"Nombre</th>
										<th scope="col">Descripcion</th>
										<th scope="col">Peso</th>
										<th scope="col">Precio de Compra</th>
										<th scope="col">Fecha Elaboracion</th>
										<th scope="col">Fecha Expiracion</th>
										<th scope="col">Precio de Venta</th>
										<th scope="col">Stock</th>
										<th scope="col">Descontinuado</th>
										<th hidden="true">Pro Imagen</th>
										<th scope="col">Vendido</th>
										<th scope="col">Categoria</th>
										<th scope="col">Proveedor</th>

                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td style="display:none;">{{ $producto->pro_ID }}</td>
											<td>{{ $producto->pro_Nombre }}</td>
											<td>{{ $producto->pro_Descripcion }}</td>
											<td>{{ $producto->pro_Peso }}</td>
											<td>{{ $producto->pro_PrecioCompra }}</td>
											<td>{{ $producto->pro_FechaElaboracion }}</td>
											<td>{{ $producto->pro_FechaExpiracion }}</td>
											<td>{{ $producto->pro_PrecioVenta }}</td>
											<td>{{ $producto->pro_Stock }}</td>
											<td>{{ $producto->pro_Descontinuado }}</td>
											<td hidden="true">{{ $producto->pro_Imagen }}</td>
											<td>{{ $producto->pro_Vendido }}</td>
											<td>{{ $producto->categoria->cat_Nombre }}</td>
											<td>{{ $producto->proveedores->prov_Nombre }}</td>

                                            <td>
                                                <form action="{{ route('productos.index',$producto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('productos.index',$producto->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('productos.index',$producto->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
</div>
</div>
</div>
</div>
</x-app-layout>