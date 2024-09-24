<?php

namespace App\View\Components\LayoutModules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdaptiveSplit extends Module
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout-modules.adaptive-split');
    }
}
