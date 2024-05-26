<?php

namespace StatamicHeroicons\Tests;

use BladeUI\Heroicons\BladeHeroiconsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Statamic\Testing\AddonTestCase;
use StatamicHeroicons\ServiceProvider;

abstract class TestCase extends AddonTestCase
{
    protected string $addonServiceProvider = ServiceProvider::class;

    protected function getPackageProviders($app)
    {
        $providers = parent::getPackageProviders($app);

        array_unshift($providers, BladeHeroiconsServiceProvider::class, BladeIconsServiceProvider::class);

        return $providers;
    }

    protected function resolveApplicationConfiguration($app)
    {
        parent::resolveApplicationConfiguration($app);
    }
}
