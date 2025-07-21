<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HistoryHeaderComponent extends Component
{

    public $history;


    public function __construct($history)
    {
        $this->history = $history;
    }


    public function render(): View|Closure|string
    {
        return view('components.history-header-component');
    }
}
