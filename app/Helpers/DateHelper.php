<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateHelper
{
    public static function getLocalDate(Carbon $date): Carbon
    {
        return $date->shiftTimezone('UTC')->setTimezone('Europe/Berlin');
    }
}
