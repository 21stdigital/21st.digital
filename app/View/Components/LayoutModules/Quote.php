<?php

namespace App\View\Components\LayoutModules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Quote extends Module
{
    public function data()
    {
        $quote_data = [
            'author_name' => $this->context['author']->title,
            'author_job_title' => $this->context['author']->job_title,
            'author_linkedin' => $this->context['author']->linkedin_handle,
        ];

        if ($client = $this->context['author']->client) {

            $quote_data = array_merge($quote_data, [
                'client_url' => $client->client_url,
                'client_logo' => '/icons/logos/'.$client->get('logo'),
                'client' => $client,
            ]);
        }

        return array_merge(parent::data(), $quote_data);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout-modules.quote');
    }
}
