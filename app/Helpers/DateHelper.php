<?php
namespace App\Helpers;
use Carbon\Carbon;

class DateHelper
{
  static function getLocalDate(Carbon $date)
  {
    return $date->shiftTimezone('UTC')->setTimezone('Europe/Berlin');
  }
}
