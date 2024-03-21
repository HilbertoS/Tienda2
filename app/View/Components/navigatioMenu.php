<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class navigatioMenu extends Component
{
    /**
     * Create a new component instance.
     */
    public $item;
    public $route;
    public $route2;
    public $route3;
    public function __construct($item, $route, $route2, $route3)
    {
        //
        $this->item = $item;
        $this->route = $route;
        $this->route2 = $route2;
        $this->route3 = $route3;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navigatio-menu');
    }
}
