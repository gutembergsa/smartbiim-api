<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BaseContentGroupComponent extends Component
{
    public $title;
    public $subtitle;
    public $buttonLabel;

    public function __construct($title, $subtitle, $buttonLabel = 'Adicionar campo')
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->buttonLabel = $buttonLabel;
    }

    public function render()
    {
        return view('components.base-content-group-component');
    }
}
