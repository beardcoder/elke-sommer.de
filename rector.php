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
    ->withPhpSets(php83: true)
    ->withPreparedSets(earlyReturn: true, codeQuality: true, typeDeclarations: true, codingStyle: true, instanceOf: true)
    ->withSets([
        LaravelSetList::LARAVEL_100,
    ]);
