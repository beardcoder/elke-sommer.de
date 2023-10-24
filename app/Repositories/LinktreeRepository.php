<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleJsonRepeaters;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Linktree;

class LinktreeRepository extends ModuleRepository
{
  use HandleMedias;
  use HandleFiles;
  use HandleRevisions;
  use HandleJsonRepeaters;

  protected $jsonRepeaters = ['links'];

  public function __construct(Linktree $model)
  {
    $this->model = $model;
  }
}
