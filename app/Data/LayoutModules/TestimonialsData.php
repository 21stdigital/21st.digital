<?php

namespace App\Data\LayoutModules;

use App\Data\LayoutModules\Testimonials\TestimonialData;
use Spatie\LaravelData\Data;
use Statamic\Fields\Values;

class TestimonialsData extends Data
{
    public function __construct(
        public string $overline,
        public string $headline,
        public string $intro_text,
        /** @var TestimonialData[] */
        public array $testimonials,
    ) {}

    public static function fromContext(Values $context): self
    {
        /** @var string $overline */
        $overline = $context->__get('overline');
        /** @var string $headline */
        $headline = $context->__get('headline');
        /** @var string $intro_text */
        $intro_text = $context->__get('intro_text');

        /** @var array $rawTestimonials */
        $rawTestimonials = $context->__get('testimonials');
        $testimonials = [];
        foreach ($rawTestimonials as $testimonial) {
            $testimonials[] = new TestimonialData(
                quote: $testimonial->quote,
                author_name: $testimonial->author->title,
                author_job_title: $testimonial->author->job_title,
                client_logo: $testimonial->author->client->augmentedValue('logo'),
                client_url: $testimonial->author->client->client_url,
            );
        }

        return new self($overline, $headline, $intro_text, $testimonials);
    }
}
