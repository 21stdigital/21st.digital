<?php

namespace App\Data\TextElements;

use Spatie\LaravelData\Data;
use Statamic\Fields\Values;

/**
 * Class TextData
 *
 * Represents a text element with content sourced from Statamic values.
 */
class TextData extends Data
{
    /**
     * @param  string  $text  The content of the text element.
     */
    public function __construct(
        public string $text
    ) {}

    /**
     * Factory method to create a TextData instance from Statamic Values.
     *
     * @param  Values  $context  Statamic values context to extract the text content from.
     *
     * @phpstan-param Values&object{
     *     text: string
     * } $context
     */
    public static function fromStatamic(Values $context): self
    {
        // Directly access the `text` property from Values
        return new self($context->text);
    }
}
