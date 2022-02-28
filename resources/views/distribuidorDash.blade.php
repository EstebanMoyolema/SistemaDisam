{{-- Titulo de la pagina --}}
@section('titlePage','Distribuidor')

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
                    You're logged in!
                    As Distribuidor
                </div>
            </div>
        </div>
    </div>
</x-app-layout>