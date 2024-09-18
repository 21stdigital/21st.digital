<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Text extends Component
{
    public string|array $text;

    /**
     * Create a new component instance.
     */
    public function __construct($text)
    {
        if (is_string($text)) {
            $this->text = $text;
        } else {
            $this->text = $text->value();
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.text');
    }
}
