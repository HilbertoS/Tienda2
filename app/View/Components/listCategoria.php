<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class listCategoria extends Component
{
    /**
     * Create a new component instance.
     */
    public $nombre;
    public $id;
    public function __construct($nombre, $id)
    {
        //
        $this->nombre = $nombre;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.list-categoria');
    }
}
