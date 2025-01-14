<?php
$finder = PhpCsFixer\Finder::create()
    ->in([__DIR__])
;

$config = new PhpCsFixer\Config();
return $config
    ->setRules([
        '@PSR2' => true,
        'combine_consecutive_unsets' => true,
        'array_syntax' => ['syntax' => 'short'],
        'declare_equal_normalize' => true,
        'no_unused_imports' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'ordered_class_elements' => true,
        'ordered_imports' => true,
    ])
    ->setUsingCache(true)
    ->setFinder($finder)
;
