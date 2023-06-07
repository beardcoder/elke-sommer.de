<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class Linktree extends Model
{
  use HasMedias, HasFiles, HasRevisions, HasSEO;

  protected $casts = [
    'links' => 'array',
  ];

  protected $fillable = [
    'published',
    'title',
    'name',
    'description',
    'phone',
    'email',
    'whatsapp',
    'links',
  ];

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

  public function getDynamicSEOData(): SEOData
  {
    return new SEOData(title: $this->title, description: $this->description);
  }
}
