<?php

namespace Rez1pro\LaraBkash;

use Illuminate\Support\ServiceProvider;
use Rez1pro\LaraBkash\Facades\LaraBkash;

class LaraBkashServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/lara-bkash.php' => config_path('lara-bkash.php'),
        ]);
    }

    public function register()
    {
        $this->app->bind('LaraBkash', function ($app) {
            return new \Rez1pro\LaraBkash\Core\Index();
        });

        $this->mergeConfigFrom(
            __DIR__ . '/config/lara-bkash.php',
            'lara-bkash'
        );
    }
}
