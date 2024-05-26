<?php

namespace StatamicHeroicons;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        \StatamicHeroicons\Tags\Heroicon::class,
    ];

    public function bootAddon()
    {
        
    }
}
