<?php

namespace Laraveldaily\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'timezones');

        // publish view
        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/laraveldaily/timezones')
        ]);

        include __DIR__ . '/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Laraveldaily\Timezones\TimezonesController');
    }
}
