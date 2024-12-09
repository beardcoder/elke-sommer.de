<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use RectorLaravel\Set\LaravelSetList;

return RectorConfig::configure()
  ->withPaths([__DIR__.'/app'])
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
