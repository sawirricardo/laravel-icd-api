<?php

namespace Sawirricardo\IcdApi\Laravel;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Sawirricardo\IcdApi\Laravel\Http\Controllers\IcdApiTokenController;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class IcdApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-icd-api')
            ->hasConfigFile();
    }

    public function registeringPackage()
    {
        $this->app->singleton('laravel-icd-api', function ($app) {
            return new IcdApi($app['config']);
        });
    }

    public function boot()
    {
        Blade::directive('icdEctStyles', function () {
            return "{!! \Sawirricardo\IcdApi\Laravel\IcdApi::ectStyles() !!}";
        });

        Blade::directive('icdEctScripts', function () {
            return "{!! \Sawirricardo\IcdApi\Laravel\IcdApi::ectScripts() !!}";
        });
    }

    public function packageBooted()
    {
        Route::macro('icdApiTokens', function (string $url, string $name = 'default') {
            return Route::post($url, IcdApiTokenController::class)->name("icd-api-token-{$name}");
        });
    }
}
