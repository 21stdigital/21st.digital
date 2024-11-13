<?php

namespace App\Data\LayoutModules;

use App\Data\TextData;
use Spatie\LaravelData\Data;
use Statamic\Fields\Values;

/**
 * Class AdaptiveSplitData
 *
 * Represents the adaptive split layout data module, including various presentation elements.
 */
class AdaptiveSplitData extends Data
{
    /**
     * @param  string  $presentation  Presentation type for the layout
     * @param  array  $headElements  Elements to display in the head section
     * @param  string  $overline  Overline text displayed above the headline
     * @param  string  $headline  Main headline text for the layout
     * @param  TextData  $text  Text content block
     * @param  array  $tailElements  Elements to display in the tail section
     */
    public function __construct(
        public string $presentation,
        public array $headElements,
        public string $overline,
        public string $headline,
        public TextData $text,
        public array $tailElements,
    ) {}

    /**
     * Creates an instance of AdaptiveSplitData from Statamic Values.
     *
     * @param  Values  $context  Statamic values context from which to extract data.
     *
     * @phpstan-param Values&object{
     *      presentation: string,
     *      head_elements: array,
     *      overline: string,
     *      headline: string,
     *      text: array,
     *      tail_elements: array
     * } $context
     */
    public static function fromStatamic(Values $context): self
    {
        $presentation = $context->presentation;
        $headElements = $context->head_elements;
        $overline = $context->overline;
        $headline = $context->headline;
        $text = TextData::fromArray($context->text);
        $tailElements = $context->tail_elements;

        return new self($presentation, $headElements, $overline, $headline, $text, $tailElements);
    }
}
