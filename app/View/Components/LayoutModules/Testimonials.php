<?php

namespace App\View\Components\LayoutModules;

use App\Data\LayoutModules\TestimonialsData;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Testimonials extends Module
{
    public TestimonialsData $viewData;

    /**
     * Initializes the client data by setting it through getClients method.
     */
    protected function init(): void
    {
        $this->viewData = TestimonialsData::fromContext($this->context);
    }

    protected function augmentData(): array
    {
        return [
            'viewData' => $this->viewData,
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
