<?php

namespace App\View\Components\LayoutModules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Module extends Component
{
    /**
     * Create a new component instance.
     *
     * @param  string|null  $module_id  The module identifier.
     * @param  string|null  $type  The type of the module.
     * @param  mixed  $context  The context data passed to the component.
     */
    public function __construct(public ?string $module_id, public ?string $type, public $context)
    {
        $this->module_id = $module_id;
        $this->type = $type;
        $this->context = $context;
        $this->init();
    }

    /**
     * Initialize the module. This method can be overridden in child classes.
     */
    protected function init(): void {}

    /**
     * Augments the data passed to the view.
     *
     * @return array<string, string|array<string, string|array>> Augmented data array.
     */
    protected function augmentData(): array
    {
        return [];
    }

    /**
     * Combines the parent's data with context and augmented data.
     *
     * @return array<string, mixed> Combined data for the component.
     */
    public function data(): array
    {
        return array_merge(
            parent::data(),
            $this->context ? $this->context->toArray() : [],
            $this->augmentData()
        );
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string The view to be rendered.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout-modules.module');
    }
}
