<?php

declare(strict_types=1);

return [
    'preset' => 'symfony',
    'ide' => 'vscode',
    'exclude' => [
        'tests',
        'var',
        'vendor',
        'node_modules',
    ],
    'add' => [
        //  ExampleMetric::class => [
        //      ExampleInsight::class,
        //  ]
    ],
    'remove' => [
        //  ExampleInsight::class,
    ],
    'config' => [
        //  ExampleInsight::class => [
        //      'key' => 'value',
        //  ],
    ],
    'requirements' => [
        'min-quality' => 80,
        'min-complexity' => 80,
        'min-architecture' => 80,
        'min-style' => 80,
        'disable-security-check' => false,
    ],
    'threads' => null,
    'timeout' => 60,
];
