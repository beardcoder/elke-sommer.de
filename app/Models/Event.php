<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Event extends Model implements Sortable
{
    use HasBlocks;
    use HasSlug;
    use HasMedias;
    use HasFiles;
    use HasRevisions;
    use HasPosition;

    public $slugAttributes = [
        'name',
    ];

    protected $fillable = [
        'published',
        'name',
        'description',
        'address_street',
        'address_city',
        'address_state',
        'address_postal_code',
        'address_country',
        'start_date',
        'end_date',
        'event_status',
        'attended_mode',
    ];

    #[\Override]
    protected function casts(): array
    {
        return [
            'start_date' => 'datetime',
            'end_date' => 'datetime',
        ];
    }
}
