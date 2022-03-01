@section('titlePage')
DISAM | Pedidos
@endsection
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        @section('opcionesMenu')
        <x-nav-link :href="route('rutas.index')" :active="request()->routeIs('rutas')">
            {{ __('Rutas') }}
        </x-nav-link>
        <x-nav-link :href="route('clientes.index')" :active="request()->routeIs('clientes')">
            {{ __('Clientes') }}
        </x-nav-link>
        <x-nav-link :href="route('pedidos.index')" :active="request()->routeIs('pedidos')">
            {{ __('Pedidos') }}
        </x-nav-link>
        @endsection
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pedido') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pedidos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Ped Fechapedido</th>
										<th>Ped Subtotal</th>
										<th>Ped Total</th>
										<th>Cliente Id</th>
										<th>Producto Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedidos as $pedido)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pedido->ped_FechaPedido }}</td>
											<td>{{ $pedido->ped_SubTotal }}</td>
											<td>{{ $pedido->ped_Total }}</td>
											<td>{{ $pedido->cliente_ID }}</td>
											<td>{{ $pedido->producto_ID }}</td>

                                            <td>
                                                <form action="{{ route('pedidos.destroy',$pedido->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pedidos.show',$pedido->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pedidos.edit',$pedido->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $pedidos->links() !!}
            </div>
        </div>
    </div>
    
</div>
</div>
</div>
</div>
</x-app-layout>
