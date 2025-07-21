<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HistoryHeaderComponent extends Component
{

    public $history;


    public function __construct($history)
    {
        $this->history = $history;
    }


    public function render()
    {
        return view('components.history-header-component');
    }
}
