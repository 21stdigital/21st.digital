<?php

use App\Providers\AppServiceProvider;
use App\Providers\HorizonServiceProvider;
use SocialiteProviders\Manager\ServiceProvider;

return [
    AppServiceProvider::class,
    HorizonServiceProvider::class,
    ServiceProvider::class,
];
