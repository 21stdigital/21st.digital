<?php

namespace App\View\Components\LayoutModules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Module extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public ?string $module_id, public ?string $type, public $context)
    {
        $this->module_id = $module_id;
        $this->type = $type;
        $this->context = $context;

    }

    /**
     * @return array<string, string|array<string, string|array>>
     */
    protected function augmentData(): array
    {
        return [];
    }

    public function data()
    {
        return array_merge(parent::data(), $this->context->toArray(), $this->augmentData());
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout-modules.module');
    }
}
