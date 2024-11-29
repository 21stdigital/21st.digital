<?php

namespace App\Data;

use Spatie\LaravelData\Data;
use Statamic\Fields\Value;
use Statamic\Fieldtypes\Icon;

class SvgIconData extends Data
{
    public function __construct(
        public string $directory,
        public string $folder,
        public string $name,
        public string $path,
    ) {}

    public static function fromIconValue(Value $iconValue)
    {
        /** @var Icon $iconFieldtype */
        $iconFieldtype = $iconValue->fieldtype();
        if (! ($iconFieldtype instanceof Icon)) {
            throw new \InvalidArgumentException('The $iconFieldtype must be an instance of Statamic\Fieldtypes\Icon.');
        }
        /** @var array $iconFieldtypeConfig */
        $iconFieldtypeConfig = $iconFieldtype->config();
        $directory = $iconFieldtypeConfig['directory'];
        $folder = $iconFieldtypeConfig['folder'];
        $name = $iconValue->raw();
        $path = "$folder/$name";

        return new self(
            directory: $directory,
            folder: $folder,
            name: $name,
            path: $path,
        );
    }
}
