<?php

namespace App\View\Components\LayoutModules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Testimonials extends Module
{
    /**
     * Initializes the client data by setting it through getClients method.
     */
    protected function init(): void {}

    /**
     * Augments the data passed to the view.
     *
     * @return array<string, array<int, array{title: string, url: string, logo: string}>|string>
     */
    protected function augmentData(): array
    {
        return [

        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout-modules.testimonials');
    }
}
