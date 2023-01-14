<?php

namespace Sedehi\Tabler;

use Faker\Core\File;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class TablerServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tabler');

        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }

        Blade::componentNamespace('Sedehi\\tabler\\View\\Components', 'tabler');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/tabler.php', 'tabler');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['tabler'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([__DIR__.'/../config/tabler.php' => config_path('tabler.php')] ,'tabler-config');

        // Publishing the views.
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/tabler'),
        ], 'tabler-views');

        $this->publishes([
            __DIR__.'/../resources/views/index.blade.php' => resource_path('views/admin/index.blade.php'),
        ], 'tabler-index');

        // Publishing assets.
        $this->publishes([
            __DIR__.'/../resources/build' => public_path('admin'),
        ], 'tabler-assets');

        $this->publishes([__DIR__.'/../lang' => base_path('lang')], 'lang');
    }
}
