<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use RectorLaravel\Set\LaravelSetList;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/app',
    ])
    ->withPhpVersion(PhpVersion::PHP_83)
    ->withSets([
        SetList::EARLY_RETURN,
        SetList::TYPE_DECLARATION,
        SetList::CODE_QUALITY,
        LaravelSetList::LARAVEL_100,
    ]);
