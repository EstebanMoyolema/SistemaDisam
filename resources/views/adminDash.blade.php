@extends('adminlte::page')
@section('content_header')
    <h1>Administrador</h1>
@stop
@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop
{{-- Titulo de la pagina -- }}
@section('title', 'Administrador')
{{-- Titulo de la pagina
@section('titlePage','Administrador')
@section('opcionesMenu')
<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link :href="route('auth.register')" :active="request()->routeIs('auth.register')">
        {{ __('Registro de usuarios') }}
    </x-nav-link>
</div>
@endsection
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as an admin!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}