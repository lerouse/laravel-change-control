<?php

namespace Lerouse\LaravelChangeControl;

use Illuminate\Support\ServiceProvider;

class LaravelChangeControlServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/change-control.php' => config_path('change-control.php'),
        ], 'change-control-config');
    }

}