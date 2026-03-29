<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$config = new Config();

return $config
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
        'no_unused_imports' => true,
        'yoda_style' => false,
        'not_operator_with_successor_space' => true,
        'global_namespace_import' => [
            'import_classes' => false,
            'import_functions' => false,
            'import_constants' => false,
        ],
    ])
    ->setFinder(
        Finder::create()
            ->in([
                __DIR__.'/app',
                __DIR__.'/config',
                __DIR__.'/database',
                __DIR__.'/resources',
                __DIR__.'/routes',
            ])
            ->name('*.php')
            ->notName('*.blade.php')
            ->ignoreDotFiles(true)
            ->ignoreVCS(true)
    );
