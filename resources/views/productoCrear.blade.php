<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('store.producto') }}" method="POST">
                        @csrf
                        <div class="row mt-4">
                        <div class="col col-md-3">
                            <x-input-label for="name" :value="__('Nombre del producto')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="nombre" :value="old('name')" required autofocus autocomplete="name" placeholder="Escriba el nombre" />
                        </div>
                        <div class="col col-md-3">
                            <x-input-label for="categoria_id" :value="__('Categoria del producto')" />
                            <select name="categoria_id" id="categoria_id" class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm " style="height: 45px">
                                @foreach ($categorias as $categoria)
                                    <x-select-options :id="__($categoria->id)" :nombre="__($categoria->nombre)"/>
                                @endforeach
                            </select>
                        </div>
                        <div class="col col-md-3">
                            <x-input-label for="presio" :value="__('Precio')"/>
                            <x-text-input id="precio" class="block mt-1 w-full" type="number" name="precio" :value="old('0')" required autofocus autocomplete="descuento" placeholder="Escriba el precio" />
                        </div>
                        <div class="col col-md-3">
                            <x-input-label for="descuento" :value="__('Descuento')"/>
                            <x-text-input id="descuento" class="block mt-1 w-full" type="number" name="descuento" :value="old('0')" required autofocus autocomplete="descuento" placeholder="Escriba el descuento" />
                        </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col col-md-6">
                                <x-input-label for="description" :value="__('Description')" />
                                <textarea name="descripcion" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="col d-flex justify-content-end">
                                    <x-input-label for="estado" :value="__('Estado del producto')" style="margin-right: 10px" />
                                    <input type="checkbox" name="estado" id="estado">
                            </div>
                        <div>
                        <div class="row mt-4">
                            <div class="col col-md-3">
                            <x-primary-button type="submit">Submit</x-primary-button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>