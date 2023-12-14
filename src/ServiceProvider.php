<?php

namespace Eminos\StatamicInlineGroup;

use Statamic\Providers\AddonServiceProvider;
use Eminos\StatamicInlineGroup\Fieldtypes\InlineGroupFieldtype;
 
class ServiceProvider extends AddonServiceProvider
{
    protected $fieldtypes = [
        InlineGroupFieldtype::class,
    ];

    protected $vite = [
        'hotFile' => __DIR__ . '/../dist/vite.hot',
        'publicDirectory' => 'dist',
        'input' => [
            'resources/js/statamic-inline-group.js',
            'resources/css/statamic-inline-group.css'
        ],
    ];
}