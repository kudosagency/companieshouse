<?php
/**
 * Companies House service provider
 *
 * @package trevsewell/companieshouse
 * @author Trevor Sewell <trev@kudos.agency>
 */
namespace Trevsewell\CompaniesHouse\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/companieshouse.php' => config_path('companieshouse.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
