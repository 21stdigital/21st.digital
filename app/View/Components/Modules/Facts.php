<?php

namespace App\View\Components\Modules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Facts extends Module
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modules.facts');
    }
}
