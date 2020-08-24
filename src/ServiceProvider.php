<?php

namespace Jonassiewertsen\ExternalLink;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $scripts = [
        __DIR__ . '/../public/js/external-link.js'
    ];

    public function boot()
    {
        parent::boot();

        ExternalLink::register();
    }

}
