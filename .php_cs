<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/MangoPay')
    ->in(__DIR__.'/tests')
;

$config = new PhpCsFixer\Config();
$config->setRiskyAllowed(false);

return $config->setRules([
        '@PSR12' => true,
        'fully_qualified_strict_types' => true,
        'array_syntax' => ['syntax' => 'short'],
        '@PHP56Migration' => true,
        '@PHP70Migration' => false,
        '@PHP71Migration' => false,
        '@PHP73Migration' => false,
        '@PHP80Migration' => false,
    ])
    ->setFinder($finder)
;
