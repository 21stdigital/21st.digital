<?php

namespace App\View\Components\Elements;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Statamic\Assets\Asset;

class Image extends Component
{
    public string $src;
    public string $width;
    public string $height;
    public string $alt;
    public string $loading = 'lazy';
    public $srcset;
    public $sizes;

    /**
     * Create a new component instance.
     */
    public function __construct(public Asset $image)
    {
        $this->image = $image;
        $this->src = $image->absoluteUrl();
        $this->alt = $image['alt'] ?? '';
        $this->width = $image['width'];
        $this->height = $image['height'];

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.elements.image');
    }
}
