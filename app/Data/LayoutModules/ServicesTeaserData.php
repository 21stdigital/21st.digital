<?php

namespace App\Data\LayoutModules;

use App\Enums\ServicesTeaserCompilation;
use InvalidArgumentException;
use Spatie\LaravelData\Data;
use Statamic\Entries\EntryCollection;
use Statamic\Facades\Entry;
use Statamic\Fields\LabeledValue;
use Statamic\Fields\Values;
use Statamic\Stache\Query\EntryQueryBuilder;

/**
 * Class ServicesTeaserData
 *
 * Represents the data for the Services Teaser layout module.
 */
final class ServicesTeaserData extends Data
{
    /**
     * @param  string  $headline  The main headline for the teaser.
     * @param  string  $intro_text  The introductory text for the teaser.
     * @param  string|null  $overline  The optional overline displayed above the headline.
     * @param  ServicesTeaserItemData[]  $entries  Array of entries to be displayed.
     */
    public function __construct(
        public ?string $headline,
        public ?string $intro_text,
        public ?string $overline,
        public array $entries,
    ) {}

    /**
     * Creates an instance of ServicesTeaserData from Statamic Values.
     *
     * @param  Values  $context  Statamic values context from which to extract data.
     *
     * @phpstan-param Values&object{
     *      overline: ?string,
     *      headline: string,
     *      intro_text: string,
     *      compilation: ?ServicesTeaserCompilation,
     *      entries: EntryCollection
     * } $context
     */
    public static function fromStatamic(Values $context): self
    {
        $overline = $context->overline;
        $headline = $context->headline;
        $intro_text = $context->intro_text;

        /** @var LabeledValue $c */
        $c = $context->compilation;
        /** @var ServicesTeaserCompilation|null $compilation */
        $compilation = match ($c->value()) {
            'all' => ServicesTeaserCompilation::ALL,
            'by_hand' => ServicesTeaserCompilation::BY_HAND,
            default => throw new InvalidArgumentException('Ungültiger Wert für Compilation: '.$c->value()),
        };

        /** @var EntryCollection $raw_entries */
        $raw_entries = $context->entries;

        // Compile entries based on the specified compilation type
        if ($compilation === ServicesTeaserCompilation::ALL) {
            $raw_entries = self::getAllPublishedServiceEntries();
        }

        // Map each entry to a ServicesTeaserItemData instance
        $entries = $raw_entries->map(
            fn ($entry) => ServicesTeaserItemData::fromEntry($entry)
        )->all();

        return new self($headline, $intro_text, $overline, $entries);
    }

    /**
     * Retrieves all published entries in the "services" collection, ordered by date.
     */
    private static function getAllPublishedServiceEntries(): EntryCollection
    {

        /** @var EntryQueryBuilder $query */
        $query = Entry::query();

        $query = $query
            ->where('collection', 'services')
            ->where('published', true)
            ->orderBy('date', 'desc');

        return $query->get();
    }
}
