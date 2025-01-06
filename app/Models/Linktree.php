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

    protected $fillable = ['published', 'title', 'name', 'description', 'phone', 'email', 'whatsapp', 'links'];

    #[\Override]
    protected function casts(): array
    {
        return [
            'links' => 'array',
        ];
    }
}
