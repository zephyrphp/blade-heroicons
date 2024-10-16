<?php

namespace Zephyr\BladeHeroicons;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeHeroiconsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->bootConfig();
        $this->bootViews();
    }

    public function register(): void
    {
        $this->registerConfig();
    }

    protected function bootConfig(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/blade-heroicons.php' => config_path('blade-heroicons.php'),
            ], 'blade-heroicons-config');
        }
    }

    protected function bootViews(): void
    {
        $namespace = config('blade-heroicons.namespace', 'ui');

        if (file_exists(resource_path('vendor/zephyrphp/blade-heroicons/views'))) {
            Blade::anonymousComponentPath(resource_path('vendor/zephyrphp/blade-heroicons/views'), $namespace);
        }

        Blade::anonymousComponentPath(__DIR__.'/../resources/views', $namespace);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('vendor/zephyrphp/blade-heroicons/views'),
            ], 'blade-heroicons-views');
        }
    }

    protected function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-heroicons.php', 'blade-heroicons');
    }
}
