<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorías') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table">
                        <thead class="table-dark">
                            <tr class="table-dark">
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="table-light">
                            @foreach ($categorias as $categoria)
                                    <tr class="table-light">
                                        <td scope="row">{{ $categoria->id }}</td>
                                        <td>{{ $categoria->nombre }}</td>
                                        <td>{{ $categoria->descripcion }}</td>

                                        @if (Route::currentRouteName() == 'tabla.edit')
                                        <td><a href="{{ url('show.categoria/' . $categoria->id) }}" class="btn btn-warning">Edictar</a></td>
                                        @else
                                        <form method="POST" action="{{ route('delete.categoria') }}">
                                            @csrf

                                            <td><button name="id" class="btn btn-danger" value="{{ $categoria->id }}">Eliminar</button></td>
                                        </form>
                                        @endif
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>