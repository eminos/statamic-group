<?php

namespace Eminos\StatamicGroup;

use Statamic\Providers\AddonServiceProvider;
use Eminos\StatamicGroup\Fieldtypes\GroupFieldtype;
 
class ServiceProvider extends AddonServiceProvider
{
    public function __construct()
    {
        $this->vite['hotFile'] = base_path('vendor/eminos/statamic-group/dist/vite.hot');

        parent::__construct(app());
    }

    protected $fieldtypes = [
        GroupFieldtype::class,
    ];

    protected $vite = [
        'hotFile' => null, // set in the constructor for reasons
        'publicDirectory' => 'dist',
        'input' => [
            'resources/js/statamic-group.js',
            'resources/css/statamic-group.css'
        ],
    ];

    public function bootAddon()
    {

        // 
        
    }
}