<?php

namespace Sedehi\Tabler;

use Exception;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Morilog\Jalali\Jalalian;
use Sedehi\Artist\Console\Command\PruneUploadTemporaryCommand;
use Sedehi\Artist\Http\Middleware\Authenticate;
use Sedehi\Artist\Http\Middleware\DefineGates;
use Sedehi\Artist\Http\Middleware\Permission;

class TablerServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'tabler');
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
        $this->publishes([
            __DIR__.'/../config/tabler.php' => config_path('tabler.php'),
        ], 'tabler-config');

        // Publishing the views.
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/tabler'),
        ], 'tabler-views');

        // Publishing assets.
        $this->publishes([
            __DIR__.'/../resources/build' => public_path('admin'),
        ], 'tabler-assets');

        // Publishing the translation files.
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/tabler'),
        ], 'tabler-lang');
    }
}
