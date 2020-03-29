<?php

namespace Davpyu\BangunRuang\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [\Davpyu\BangunRuang\Providers\BangunRuangServiceProvider::class];
    }

    protected function setUp(): void
    {
        parent::setUp();
    }
}
