<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('statamic:git:commit')
    ->everyTenMinutes();
