<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Statamic\Statamic;
use Stillat\Relationships\Support\Facades\Relate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Statamic::vite('app', [
        //     'resources/js/cp.js',
        //     'resources/css/cp.css',
        // ]);

        Event::listen(function (\SocialiteProviders\Manager\SocialiteWasCalled $event) {
            $event->extendSocialite('google', \SocialiteProviders\Google\Provider::class);
        });

        $this->bootRelations();
    }

    protected function bootRelations()
    {
        Relate::oneToMany('testimonials.client', 'clients.representatives');
        Relate::oneToMany('case_studies.client', 'clients.case_studies');
        Relate::oneToMany('case_studies.solution_category', 'solutions.case_studies');
        // Relate::manyToMany('foundations.services', 'services.foundations');
        // Relate::manyToMany('foundations.solutions', 'solutions.foundations');
        // Relate::manyToMany('case_studies.services', 'services.case_studies');
        // Relate::manyToMany('case_studies.foundations', 'foundations.case_studies');
    }
}
