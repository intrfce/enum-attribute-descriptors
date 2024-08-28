<?php

namespace Intrfce\EnumAttributeDescriptors\Tests;

use Intrfce\EnumAttributeDescriptors\Tests\Providers\TestApplicationServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array<int, class-string<\Illuminate\Support\ServiceProvider>>
     */
    protected function getPackageProviders($app): array
    {
        return [
            TestApplicationServiceProvider::class,
        ];
    }
}
