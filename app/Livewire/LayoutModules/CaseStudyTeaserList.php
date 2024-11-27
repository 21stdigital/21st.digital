<?php

namespace App\Livewire\LayoutModules;

use Livewire\Component;
use Statamic\Facades\Entry;
use Statamic\Stache\Query\EntryQueryBuilder;

class CaseStudyTeaserList extends Component
{
    /**
     * @var string[]
     */
    protected array $collections = ['case_studies'];
    public array $entries;
    public string $class;
    public string $compilation;

    public function mount($class, $compilation, $entries)
    {
        $this->class = $class;
        $this->compilation = $compilation;
        $this->entries = $this->compilation === 'by_hand' ? $entries : $this->getNewestEntries();
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
        $query = Entry::query(); // Entry::query() gibt ein EntryQueryBuilder-Objekt zurück
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
        if ($this->compilation !== 'by_hand') {
            $this->entries = $this->getNewestEntries();
        }
    }

    public function render()
    {
        return view('livewire.layout-modules.case-study-teaser-list');
    }
}
