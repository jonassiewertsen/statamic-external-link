<?php

namespace Jonassiewertsen\LinkFieldtype;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $scripts = [
        __DIR__ . '/../public/js/link-fieldtype.js'
    ];

    public function boot()
    {
        parent::boot();

        LinkFieldtype::register();
    }

}