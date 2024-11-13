<?php

namespace App\Data;

use App\Data\TextElements\LinkData;
use App\Data\TextElements\TextData as TextElementData;
use InvalidArgumentException;
use Spatie\LaravelData\Data;
use Statamic\Fields\Values;

/**
 * Class TextData
 *
 * Represents a collection of text elements, which can include different types such as simple text or links.
 */
class TextData extends Data
{
    /**
     * @param  array  $elements  An array of text elements (e.g., instances of TextElementData or LinkData).
     */
    public function __construct(
        public array $elements
    ) {}

    /**
     * Factory method to create a TextData instance from an array of Statamic Values.
     *
     * @param  array  $textArray  Array of Statamic Values objects representing individual text elements.
     *
     * @phpstan-param array<int, Values&(object{type: 'text', text: string}|object{type: 'link', cta: \Statamic\Fieldtypes\Link\ArrayableLink, cta_label: string})> $textArray
     */
    public static function fromArray(array $textArray): self
    {
        // Process each element and convert it to the corresponding Data object
        $elements = collect($textArray)->map(function (Values $element) {
            return match ($element->type) {
                'text' => TextElementData::fromStatamic($element),
                'link' => LinkData::fromStatamic($element),
                default => throw new InvalidArgumentException("The type {$element->type} is not supported."),
            };
        })->all();

        return new self($elements);
    }
}
