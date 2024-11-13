<?php

namespace App\Data\LayoutModules;

use App\Data\SvgIconData;
use Spatie\LaravelData\Data;
use Statamic\Entries\Entry;

/**
 * Class ServicesTeaserItemData
 *
 * Represents a single item in the Services Teaser module.
 */
final class ServicesTeaserItemData extends Data
{
    /**
     * @param  string  $icon  The path to the SVG icon.
     * @param  string  $headline  The headline for the teaser item.
     * @param  string  $text  The descriptive text for the teaser item.
     * @param  string  $url  The URL associated with the teaser item.
     * @param  string  $url_label  The label for the URL link.
     */
    public function __construct(
        public string $icon,
        public string $headline,
        public string $text,
        public string $url,
        public string $url_label = 'Mehr erfahren', // Default label
    ) {}

    /**
     * Factory method to create a ServicesTeaserItemData instance from a Statamic Entry.
     *
     * @param  Entry  $entry  Statamic entry instance to extract data from.
     *
     * @phpstan-param Entry&object{
     *     teaser: object{title: string, text: string}
     * } $entry
     */
    public static function fromEntry(Entry $entry): self
    {
        // Extract and prepare values from the Entry
        $icon = SvgIconData::from($entry->augmentedValue('icon'));

        // Access the `teaser` property directly, assuming it has the specified structure
        $headline = $entry->teaser->title;
        $text = $entry->teaser->text;
        $url = $entry->url();
        $url_label = 'Mehr erfahren';

        return new self(
            $icon->path,
            $headline,
            $text,
            $url,
            $url_label,
        );
    }
}
