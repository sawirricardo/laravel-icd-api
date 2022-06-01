<?php

namespace Sawirricardo\IcdApi\Laravel\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Sawirricardo\IcdApi\Laravel\IcdApiServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            IcdApiServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('icd-api.client_id', 'client_id');
        config()->set('icd-api.client_secret', 'client_secret');
        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-icd-api_table.php.stub';
        $migration->up();
        */
    }
}
