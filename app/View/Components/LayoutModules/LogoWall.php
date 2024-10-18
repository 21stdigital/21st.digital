<?php

namespace App\View\Components\LayoutModules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Statamic\Entries\Entry;
use Statamic\Entries\EntryCollection;

class LogoWall extends Module
{
    public array $clients;

    /**
     * Initializes the client data by setting it through getClients method.
     */
    protected function init(): void
    {
        $this->clients = $this->getClients();
    }

    /**
     * Augments the data passed to the view.
     *
     * @return array<string, array<int, array{title: string, url: string, logo: string}>|string>
     */
    protected function augmentData(): array
    {
        return [
            'clients' => $this->clients,
        ];
    }

    /**
     * Retrieves the client data, converts it, and returns it as an array.
     *
     * @return array<int, array{title: string, url: string, logo: string}>
     *
     * @throws \UnexpectedValueException If any item in the collection is not of type Entry.
     */
    private function getClients(): array
    {
        /**
         * @var EntryCollection<Entry>|null $clients_data
         */
        $clients_data = $this->context?->clients;

        if ($clients_data === null) {
            throw new \UnexpectedValueException('$clients_data must not be null');
        }

        return $clients_data->map(function (Entry $client): array {
            return $this->convertClient($client);
        })->toArray();
    }

    /**
     * Converts a client entry into an array with title, URL, and logo.
     *
     * @param  Entry  $client  The client entry to be converted.
     * @return array{title: string, url: string, logo: string} The converted array with client data.
     *
     * @throws \InvalidArgumentException If the client data is missing required fields.
     */
    private function convertClient(Entry $client): array
    {
        // dd($client->get('title'), $client->get('logo'), $client->augmentedValue('logo')->value(), $client->logo);
        $title = $client->get('title');
        $url = $client->get('client_url');
        $logo = $client->augmentedValue('logo')->value();

        if (empty($title) || empty($url) || empty($logo)) {
            throw new \InvalidArgumentException('Client data is missing required fields.');
        }

        return [
            'title' => (string) $title,
            'url' => (string) $url,
            'logo' => (string) $logo,
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout-modules.logo-wall');
    }
}
