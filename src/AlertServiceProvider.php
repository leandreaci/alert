<?php

namespace Leandreaci\Alerts;

use Illuminate\Support\ServiceProvider;

class AlertServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishFiles();
        $this->loadViewsFrom(__DIR__.'/Views', 'Alerts');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/helpers.php';
    }

    /**
     * Publish the style and scripts.
     */
    protected function publishFiles()
    {
        $this->publishes([
            __DIR__.'/libraries/alert.css' => public_path('css/alert.css'),
            __DIR__.'/libraries/alert.js' => public_path('js/alert.js'),
            __DIR__.'/Views/alerts.blade.php' => base_path('resources/views/vendor/alerts/alerts.blade.php'),
        ], 'alerts');
    }
}
