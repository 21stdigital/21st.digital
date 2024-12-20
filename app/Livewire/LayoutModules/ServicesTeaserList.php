<?php

namespace App\Livewire\LayoutModules;

use Livewire\Component;
use Statamic\Facades\Entry;
use Statamic\Stache\Query\EntryQueryBuilder;

class ServicesTeaserList extends Component
{
    /**
     * @var string[]
     */
    protected array $collections = ['services'];
    public array $entries;
    public array $test;

    public function mount()
    {
        $this->entries = $this->getNewestEntries(2);
        $this->test = [
            [
                'title' => 'Hallo',
            ],
            [
                'title' => 'Moin',
            ],
        ];
    }

    /**
     * Get the newest entries
     *
     * @param  int|null  $limit
     * @return array
     */
    public function getNewestEntries($limit = 10)
    {
        /**
         * @var EntryQueryBuilder $query
         * */
        $query = Entry::query();
        $query = $query
            ->whereIn('collection', $this->collections)
            ->where('published', true)
            ->where('date', '<=', now())
            ->orderBy('date', 'desc')
            ->limit($limit);

        return $query->get()->toArray();
    }

    public function updateEntries()
    {
        $this->entries = $this->getNewestEntries();
    }

    public function render()
    {
        return view('livewire.layout-modules.services-teaser-list');
    }
}
