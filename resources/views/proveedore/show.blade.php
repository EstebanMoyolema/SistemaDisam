@section('titlePage')
DISAM | Proveedores
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
                            <span class="card-title">Show Proveedore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Prov Nombre:</strong>
                            {{ $proveedore->prov_Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Prov Nombrerepresentante:</strong>
                            {{ $proveedore->prov_NombreRepresentante }}
                        </div>
                        <div class="form-group">
                            <strong>Prov Direccion:</strong>
                            {{ $proveedore->prov_Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Prov Email:</strong>
                            {{ $proveedore->prov_Email }}
                        </div>
                        <div class="form-group">
                            <strong>Prov Telefono:</strong>
                            {{ $proveedore->prov_Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Prov Telefono2:</strong>
                            {{ $proveedore->prov_Telefono2 }}
                        </div>
                        <div class="form-group">
                            <strong>Prov Telefono3:</strong>
                            {{ $proveedore->prov_Telefono3 }}
                        </div>
                        <div class="form-group">
                            <strong>Prov Ruc:</strong>
                            {{ $proveedore->prov_RUC }}
                        </div>
                        <div class="form-group">
                            <strong>Prov Observacion:</strong>
                            {{ $proveedore->prov_Observacion }}
                        </div>
                        <div class="form-group">
                            <strong>Prov Activo:</strong>
                            {{ $proveedore->prov_Activo }}
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
