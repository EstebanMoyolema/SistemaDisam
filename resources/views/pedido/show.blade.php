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
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ped Fechapedido:</strong>
                            {{ $pedido->ped_FechaPedido }}
                        </div>
                        <div class="form-group">
                            <strong>Ped Subtotal:</strong>
                            {{ $pedido->ped_SubTotal }}
                        </div>
                        <div class="form-group">
                            <strong>Ped Total:</strong>
                            {{ $pedido->ped_Total }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $pedido->cliente_ID }}
                        </div>
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $pedido->producto_ID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
</div>
</div>
</x-app-layout>
