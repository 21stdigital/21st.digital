<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Statamic\Facades\Cascade;
use Statamic\Facades\GlobalSet as GlobalSetFacade;
use Statamic\Globals\GlobalSet;

class CtaBox extends Component
{
    public function data()
    {
        /** @var GlobalSet $global_general_set */
        $global_general_set = GlobalSetFacade::findByHandle('general');
        $global_cta_box = $global_general_set->inCurrentSite()->cta_box;
        $content = Cascade::content();
        if ($content->cta_box->override_defaults) {
            $cta_box = $content->cta_box->cta_box;
            $headline = $cta_box->headline ?? $global_cta_box->headline;
            $text = $cta_box->text ?? $global_cta_box->text;
            $expert = $cta_box->expert ?? $global_cta_box->expert;
        }

        $data = [
            'headline' => $headline ?? $global_cta_box->headline,
            'text' => $text ?? $global_cta_box->text,
            'expert' => $expert ?? $global_cta_box->expert,
        ];

        return array_merge(parent::data(), $data);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.cta-box');
    }
}
