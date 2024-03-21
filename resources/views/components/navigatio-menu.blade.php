<div class="hidden sm:flex sm:items-center sm:ms-6">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <div class="d-flex align-items-center">
               <div>{{$item}}</div>
                <div class="ms-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </x-slot>

        <x-slot name="content">
            <x-dropdown-link :href="$route">
                    {{ __('Crear') }}
            </x-dropdown-link> 

            <x-dropdown-link :href="$route2">
                    {{ __('Editar') }} 
            </x-dropdown-link>  

            <x-dropdown-link :href="$route3">
                    {{ __('Eliminar') }}
            </x-dropdown-link>
        </x-slot>

    </x-dropdown>
</div>

<!-- Hamburger -->
<div class="-me-2 flex items-center sm:hidden">
    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div>