@section('titlePage')
DISAM | Vendedores
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
</div>
</div>
</div>
</div>
</x-app-layout>

