<?php

namespace App\Http\Requests\Twill;

use A17\Twill\Http\Requests\Admin\Request;
use App\Enums\EventAttendedMode;
use App\Enums\EventStatus;

class EventRequest extends Request
{
    public function rulesForCreate()
    {
        return [
            'title' => 'required|string|max:255',
        ];
    }

    public function rulesForUpdate()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'address_street' => 'nullable|string|max:255',
            'address_city' => 'nullable|string|max:100',
            'address_postal_code' => 'nullable|string|max:20',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'event_status' => 'required|in:'.implode(',', EventStatus::values()),
            'attended_mode' => 'required|in:'.implode(',', EventAttendedMode::values()),
        ];
    }
}
