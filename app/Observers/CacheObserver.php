<?php

namespace App\Observers;

use A17\Twill\Models\Model;
use Spatie\ResponseCache\Facades\ResponseCache;

class CacheObserver
{
    public function created(Model $model): void
    {
        ResponseCache::clear();
    }

    public function updated(Model $model): void
    {
        ResponseCache::clear();
    }

    public function deleted(Model $model): void
    {
        ResponseCache::clear();
    }

    public function restored(Model $model): void
    {
        ResponseCache::clear();
    }

    public function forceDeleted(Model $model): void
    {
        ResponseCache::clear();
    }
}
