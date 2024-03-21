<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class listProducto extends Component
{
    /**
     * Create a new component instance.
     */

     public $nombre;
     public $imagen;
     public $precio;
     public $descripcion;



    public function __construct($nombre, $precio, $descripcion)
    {
        //

        $this->nombre = $nombre;
        $this->imagen = 'http://localhost/M07/UF3/A2.%20Botiga/Tienda/resources/templatemo_559_zay_shop/assets/img/category_img_01.jpg';
        $this->precio = $precio;
        $this->descripcion = $descripcion;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.list-producto');
    }
}
