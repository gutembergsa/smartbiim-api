<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputDateComponent extends Component
{
    public $label;
    public $inputName;
    public $class;
    public $model;
    public $refName;
    public $datevalue;

    public function __construct($inputName, $grid, $class, $model, $refName, $datevalue, $label = null)
    {
        $this->label = $label;
        $this->inputName = $inputName;
        $this->class = $class;
        $this->model = $model;
        $this->refName = $refName;
        $this->datevalue = $datevalue;

    }

    public function render()
    {
        return view('components.input-date-component');
    }
}