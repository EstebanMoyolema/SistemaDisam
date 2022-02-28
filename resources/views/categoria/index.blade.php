@section('titlePage')
DISAM | Categorias
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Categoria') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('categorias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th hidden="true">Cat Id</th>
										<th>Nombre de la categoria</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorias as $categoria)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td hidden="true">{{ $categoria->cat_ID }}</td>
											<td>{{ $categoria->cat_Nombre }}</td>

                                            <td>
                                                <a class="btn btn-sm btn-primary " href="{{ route('categorias.index',$categoria->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('categorias.index',$categoria->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                <form action="{{ url('/dashboard/categorias/'.$categoria->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    {{method_field('DELETE')}}
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
                {!! $categorias->links() !!}
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>
</x-app-layout>