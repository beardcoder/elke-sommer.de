<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$config = new Config();

return $config
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
    ])
    ->setFinder(Finder::create()
        // ->exclude('folder-to-exclude') // if you want to exclude some folders, you can do it like this!
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
    )
;
