<?php

namespace App\Enums;

enum EventAttendedMode: string
{
    case Offline = 'OfflineEventAttendanceMode';
    case Online = 'OnlineEventAttendanceMode';
    case Mixed = 'MixedEventAttendanceMode';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
