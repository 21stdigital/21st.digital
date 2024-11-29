<?php

namespace App\View\Components\LayoutModules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionHeader extends Component
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

        return array_merge(parent::data(), $this->context->toArray());
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout-modules.section-header');
    }
}
