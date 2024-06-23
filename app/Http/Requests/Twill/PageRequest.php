<?php

namespace App\Http\Requests\Twill;

use A17\Twill\Http\Requests\Admin\Request;

class PageRequest extends Request
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
