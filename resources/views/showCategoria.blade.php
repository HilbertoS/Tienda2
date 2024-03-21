<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crea una categoria') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('update.categoria') }}" method="POST">
                        @csrf
                        <div class="row mt-4">
                        <x-text-input id="name" class="block mt-1 w-full" type="hidden" name="id" :value=" __($categoria->id)" required autofocus autocomplete="name" placeholder="Escriba el nombre" />
                        <div class="col col-md-3">
                            <x-input-label for="name" :value="__('Nombre de la categoria')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="nombre" :value=" __($categoria->nombre)" required autofocus autocomplete="name" placeholder="Escriba el nombre" />
                        </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col col-md-6">
                                <x-input-label for="description" :value="__('Description')" />
                                <textarea name="descripcion" cols="30" rows="10" class="form-control">{{ $categoria->descripcion }}</textarea>
                            </div>
                        </div>
                        <div>
                        <div class="row mt-4">
                            <div class="col col-md-3">
                            <x-primary-button type="submit">Gurdar</x-primary-button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>