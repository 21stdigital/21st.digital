<?php

namespace App\Data\TextElements;

use Spatie\LaravelData\Data;
use Statamic\Fields\Values;
use Statamic\Fieldtypes\Link\ArrayableLink;

/**
 * Class LinkData
 *
 * Represents a link element with a URL and label sourced from Statamic values.
 */
class LinkData extends Data
{
    /**
     * @param  string  $url  The URL for the link.
     * @param  string  $label  The label text for the link.
     */
    public function __construct(
        public string $url,
        public string $label,
    ) {}

    /**
     * Factory method to create a LinkData instance from Statamic Values.
     *
     * @param  Values  $context  Statamic values context to extract the link and label.
     *
     * @phpstan-param Values&object{
     *     cta: ArrayableLink,
     *     cta_label: string
     * } $context
     */
    public static function fromStatamic(Values $context): self
    {
        /** @var ArrayableLink $link */
        $link = $context->cta;

        // Directly access `cta` and `cta_label` properties
        return new self($link->url(), $context->cta_label);
    }
}
