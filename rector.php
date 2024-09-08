<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use RectorLaravel\Set\LaravelSetList;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
  ->withPaths([__DIR__ . '/app'])
  ->withPhpSets(php83: true)
  ->withPreparedSets(
    codeQuality: true,
    codingStyle: true,
    typeDeclarations: true,
    naming: true,
    instanceOf: true,
    earlyReturn: true,
    strictBooleans: true
  )
  ->withSets([LaravelSetList::LARAVEL_110]);
