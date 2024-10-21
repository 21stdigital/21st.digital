<?php

namespace App\Data\LayoutModules\Testimonials;

use Spatie\LaravelData\Data;

class TestimonialData extends Data
{
    public function __construct(
        public string $quote,
        public string $author_name,
        public string $author_job_title,
        public string $client_logo,
        public ?string $client_url,
    ) {}
}
