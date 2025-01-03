<?php

namespace App\Enums;

enum EventStatus: string
{
    case Scheduled = 'EventScheduled';
    case Cancelled = 'EventCancelled';
    case Postponed = 'EventPostponed';
    case Rescheduled = 'EventRescheduled';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
