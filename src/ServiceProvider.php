<?php

namespace Jonassiewertsen\ExternalLink;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $scripts = [
        __DIR__ . '/../public/js/external-link.js'
    ];

    protected $fieldtypes = [
        ExternalLink::class,
    ];
}
