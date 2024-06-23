<?php

namespace App\Twill\Capsules\Appointments\Http\Requests;

use A17\Twill\Http\Requests\Admin\Request;

class AppointmentRequest extends Request
{
    #[\Override]
    public function rulesForCreate()
    {
        return [];
    }

    #[\Override]
    public function rulesForUpdate()
    {
        return [];
    }
}
