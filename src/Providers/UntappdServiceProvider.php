<?php

namespace Jarlskov\LaravelUntappd\Providers;

use Illuminate\Support\ServiceProvider;
use Jarlskov\Untappd\Untappd;

class UntappdServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Untappd::class, function ($app) {
            return new Untappd($app['config']['untappd']['client_id'], $app['config']['untappd']['client_secret']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/untappd.php' => config_path('untappd.php'),
        ]);
    }

    public function provides(): array
    {
        return [Untappd::class];
    }
}
