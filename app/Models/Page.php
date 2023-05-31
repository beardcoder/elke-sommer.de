<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class Page extends Model implements Sortable
{
  use HasBlocks, HasSlug, HasMedias, HasFiles, HasRevisions, HasPosition;

  protected $fillable = ['published', 'title', 'description', 'position'];

  public $slugAttributes = ['title'];

  public function getDynamicSEOData(): SEOData
  {
    return new SEOData(title: $this->title, description: $this->description);
  }

  public $mediasParams = [
    'cover' => [
      'default' => [
        [
          'name' => 'default',
          'ratio' => 16 / 10,
        ],
      ],
      'mobile' => [
        [
          'name' => 'mobile',
          'ratio' => 10 / 16,
        ],
      ],
    ],
  ];
}
