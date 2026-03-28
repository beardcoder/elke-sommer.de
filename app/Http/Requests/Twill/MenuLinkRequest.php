<?php

namespace App\Http\Requests\Twill;

use A17\Twill\Http\Requests\Admin\Request;

class MenuLinkRequest extends Request
{
    #[\Override]
    public function rulesForCreate(): array
    {
        return [];
    }

    #[\Override]
    public function rulesForUpdate(): array
    {
        return [];
    }
}
