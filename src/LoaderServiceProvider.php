<?php

namespace Daresdev\LaravelLoader;

use Illuminate\Support\ServiceProvider;

class LoaderServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'loader');

        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/loader'),
        ]);
    }

    public function register()
    {
        //
    }
}
