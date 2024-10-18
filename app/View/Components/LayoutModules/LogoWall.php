<?php

namespace App\View\Components\LayoutModules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Statamic\Entries\Entry;
use Statamic\Entries\EntryCollection;
use Statamic\Facades\Cascade;

class LogoWall extends Module
{
    public array $clients;

    public function __construct(public ?string $module_id, public ?string $type, public $context)
    {
        $this->module_id = $module_id;
        $this->type = $type;
        $this->context = $context;

        $this->clients = $this->getClients();
        // $content = Cascade::content();
        // $clients = Cascade::toArray();

    }

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
        $clients_data = $this->context->clients;

        if ($clients_data === null) {
            throw new \UnexpectedValueException('$clients_data must not be null');
        }
        /**
         * @var array<int, array{title: string, url: string, logo: string}> $clients
         */
        $clients = $clients_data->map(function ($client): array {
            if (! $client instanceof Entry) {
                throw new \UnexpectedValueException('Client is not an instance of Entry');
            }

            return $this->convertClient($client);
        })->toArray();

        return $clients;
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
        if (empty($client->title) || empty($client->client_url) || empty($client->logo)) {
            throw new \InvalidArgumentException('Client data is missing required fields.');
        }

        return [
            'title' => (string) $client->title,
            'url' => (string) $client->client_url,
            'logo' => (string) $client->logo,
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
