<?php

namespace App\Data;

use Spatie\LaravelData\Data;
use Statamic\Fields\Values;

class LayoutModuleData extends Data
{
    public function __construct(
        public string $type,
        public string $id,
        public Values $context
    ) {}
}
