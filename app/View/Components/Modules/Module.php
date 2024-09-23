<?php

namespace App\View\Components\Modules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Module extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $module_id, public string $type, public $context)
    {
        $this->module_id = $module_id;
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
        return view('components.modules.module');
    }
}
