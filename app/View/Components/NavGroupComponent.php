<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavGroupComponent extends Component
{

    public $items;
    public $title;

    public function __construct($items, $title)
    {
        $this->title = $title;
        $this->items = $items;
    }
    
    public function render()
    {
        return view('components.nav-group-component');
    }
}
