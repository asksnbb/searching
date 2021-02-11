<?php

namespace Monogram\Searching;

use Illuminate\Contracts\Container\Container;
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;

/**
 * This is the Searching service provider class.
 *
 * @author Tom Lingham <tjlingham@gmail.com>
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class SearchingServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();
    }

    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__.'/../config/Searching.php');

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('Searching.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('Searching');
        }

        $this->mergeConfigFrom($source, 'Searching');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerSearchBuilder();
    }

    /**
     * Register the search builder class.
     *
     * @return void
     */
    public function registerSearchBuilder()
    {
        $this->app->singleton('Searching', function (Container $app) {
            $config = $app['config'];

            return new SearchBuilder($config);
        });

        $this->app->alias('Searching', SearchBuilder::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            'Searching',
        ];
    }
}
