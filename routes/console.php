<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('sitemap:generate')->hourly();
Schedule::command('twill:lqip')->hourly();
Schedule::command('backup:clean')->daily()->at('01:00');
Schedule::command('backup:run')->daily()->at('01:30');
