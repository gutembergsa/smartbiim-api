<?php

namespace App\View\Components;

use Illuminate\View\Component;


class ButtonComponent extends Component
{

    public $text;
    public $type;
    public $click;
    public ?string $icon;
    public ?int $height;
    public ?int $width;
    public ?bool $outlined;

    public function __construct(string $type = 'button', string $text = 'Enviar', string $click = '', ?string $icon = null, ?int $height = null, ?int $width = null, ?bool $outlined = false)
    {
        $this->text = $text;
        $this->type = $type;
        $this->click = $click;
        $this->icon = $icon;
        $this->height = $height;
        $this->width = $width;
        $this->outlined = $outlined;

    }


    public function render()
    {
        return view('components.button-component');
    }
}
