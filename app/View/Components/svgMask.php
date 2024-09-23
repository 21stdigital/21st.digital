<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Statamic\Assets\Asset;

class svgMask extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Asset $image)
    {
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.svg-mask');
    }
}
