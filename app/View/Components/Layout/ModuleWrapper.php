<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModuleWrapper extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $context)
    {
        $this->context = $context;
    }

    public function data()
    {
        return array_merge(parent::data(), $this->context);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.module-wrapper');
    }
}
