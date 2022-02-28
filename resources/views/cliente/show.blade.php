@section('titlePage')
DISAM | Rutas
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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cli Id:</strong>
                            {{ $cliente->cli_ID }}
                        </div>
                        <div class="form-group">
                            <strong>Cli Tipodocumento:</strong>
                            {{ $cliente->cli_TipoDocumento }}
                        </div>
                        <div class="form-group">
                            <strong>Cli Nodocumento:</strong>
                            {{ $cliente->cli_NoDocumento }}
                        </div>
                        <div class="form-group">
                            <strong>Cli Nombre:</strong>
                            {{ $cliente->cli_Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cli Apellido:</strong>
                            {{ $cliente->cli_Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Cli Telefono:</strong>
                            {{ $cliente->cli_Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Cli Direccion:</strong>
                            {{ $cliente->cli_Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Cli Nombrecomercial:</strong>
                            {{ $cliente->cli_NombreComercial }}
                        </div>
                        <div class="form-group">
                            <strong>Cli Email:</strong>
                            {{ $cliente->cli_Email }}
                        </div>
                        <div class="form-group">
                            <strong>Rutas Id:</strong>
                            {{ $cliente->rutas_ID }}
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