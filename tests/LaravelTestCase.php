<?php

namespace Lerouse\LaravelChangeControl\Tests;

use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase;

class LaravelTestCase extends TestCase
{

    /**
     * Define environment setup.
     *
     * @param  Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app): void
    {
        $config = include __DIR__ . '/../config/change-control.php';

        $app['config']->set('change-control.filename', 'test-changelog.md');
        $app['config']->set('change-control.path', 'tests/Fixtures');
    }

}