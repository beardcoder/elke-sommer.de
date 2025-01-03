<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$config = new Config();

return $config
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
        'no_unused_imports' => true, // Entfernt unbenutzte Importe
        'global_namespace_import' => [
            'import_classes' => false, // Verhindert Import von globalen Klassen
            'import_functions' => false, // Verhindert Import von globalen Funktionen
            'import_constants' => false, // Verhindert Import von globalen Konstanten
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
