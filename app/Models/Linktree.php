<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;

class Linktree extends Model
{
    use HasMedias;
    use HasFiles;
    use HasRevisions;

    protected $fillable = ['published', 'title', 'name', 'description', 'phone', 'email', 'whatsapp', 'links'];

    public $mediasParams = [
        'avatar' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 1 / 1,
                ],
            ],
        ],
    ];

    #[\Override]
    protected function casts(): array
    {
        return [
            'links' => 'array',
        ];
    }
}
