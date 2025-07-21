<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputComponent extends Component
{
    public $label;
    public $inputName;
    public $type;
    public int|string $grid;

    public function __construct($inputName, $grid, $label = null, $type = 'text')
    {
        $this->label = $label;
        $this->inputName = $inputName;
        $this->type = $type;
        $this->grid = $grid;
    }

    public function render()
    {
        return view('components.input-component');
    }
}