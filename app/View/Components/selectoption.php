<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class selectoption extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $nombre;
    public function __construct($id, $nombre)
    {
        //

        $this->id = $id;
        $this->nombre = $nombre;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select-options');
    }
}
