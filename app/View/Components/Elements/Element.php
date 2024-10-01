<?php

namespace App\View\Components\Elements;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Element extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $element_id, public string $type, public $context)
    {
        $this->element_id = $element_id;
        $this->type = $type;
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
        return view('components.elements.info-box');
    }
}
