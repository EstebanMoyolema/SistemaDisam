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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
    <section class="content container-fluid">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $producto->pro_Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->pro_Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Peso:</strong>
                            {{ $producto->pro_Peso }}
                        </div>
                        <div class="form-group">
                            <strong>Precio de Compra:</strong>
                            {{ $producto->pro_PrecioCompra }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Elaboracion:</strong>
                            {{ $producto->pro_FechaElaboracion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Expiracion:</strong>
                            {{ $producto->pro_FechaExpiracion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio de Venta:</strong>
                            {{ $producto->pro_PrecioVenta }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $producto->pro_Stock }}
                        </div>
                        <div class="form-group">
                            <strong>Descontinuado:</strong>
                            {{ $producto->pro_Descontinuado }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $producto->pro_Imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Vendida:</strong>
                            {{ $producto->pro_Vendido }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $producto->categoria->cat_Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $producto->proveedore->prov_Nombre }}
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