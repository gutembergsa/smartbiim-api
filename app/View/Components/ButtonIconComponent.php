<?php

namespace App\View\Components;

use Illuminate\View\Component;


class ButtonIconComponent extends Component
{

    public $text;
    public $type;
    public $click;
    public bool $rotate;
    public ?string $icon;
    public ?int $height;
    public ?int $width;

    public function __construct(string $type = 'button', string $text = 'Enviar', $rotate = false, string $click = '', ?string $icon = null, ?int $height = null, ?int $width = null)
    {
        $this->text = $text;
        $this->type = $type;
        $this->click = $click;
        $this->rotate = $rotate;
        $this->icon = $icon;
        $this->height = $height;
        $this->width = $width;

        
    }


    public function render()
    {
        return view('components.button-icon-component');
    }
}
