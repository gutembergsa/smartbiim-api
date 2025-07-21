<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TitleWithReturnComponent extends Component
{
    public $title;
    public $url;

    public function __construct($title = null, $url)
    {
        $this->title = $title;
        $this->url = $url;
    }

    public function render()
    {
        return view('components.title-with-return-component');
    }
}
