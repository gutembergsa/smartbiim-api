<?php

namespace App\View\Components;

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
