<?php

namespace App\View\Components\Layout;

use App\Data\LayoutModuleData;
use App\Data\LayoutModules\ServicesTeaserData;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LayoutModule extends Component
{
    public LayoutModuleData $data;

    /**
     * Create a new component instance.
     */
    public function __construct($id, $type, $context)
    {
        $this->data = LayoutModuleData::from([
            'id' => $id,
            'type' => $type,
            'context' => $context,
        ]);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        switch ($this->data->type) {
            case 'services-teaser':
                return view('components.layout-modules.services-teaser', ServicesTeaserData::fromStatamic($this->data->context)->toArray());

            default:
                // code...
                break;
        }
        if ($this->data->type === 'services-teaser') {

        }

        return view('components.layout.layout-module');
    }
}
