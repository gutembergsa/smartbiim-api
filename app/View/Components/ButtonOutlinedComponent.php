<?php

namespace App\View\Components;

use Illuminate\View\Component;


class ButtonOutlinedComponent extends Component
{

    public $text;
    public $type;
    public $click;

    public function __construct(string $type = 'button', string $text = 'Enviar', string $click = '')
    {
        $this->text = $text;
        $this->type = $type;
        $this->click = $click;
    }


    public function render()
    {
        return view('components.button-outlined-component');
    }
}
