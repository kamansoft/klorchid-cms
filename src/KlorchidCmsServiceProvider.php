<?php

namespace Kamansoft\KlorchidCms;

use Illuminate\Support\ServiceProvider;
use Kamansoft\Klorchid\KlorchidServiceProvider;

use Kamansoft\KlorchidCms\KlorchidCms;
use Kamansoft\KlorchidCms\Prueba;

class KlorchidCmsServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 */
	public function boot() {
		/*
			         * Optional methods to load your package assets
		*/
		// $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'klorchid-cms');
		// $this->loadViewsFrom(__DIR__.'/../resources/views', 'klorchid-cms');
		// $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
		// $this->loadRoutesFrom(__DIR__.'/routes.php');

		if ($this->app->runningInConsole()) {
			$this->publishes([
				__DIR__ . '/../config/config.php' => config_path('klorchid-cms.php'),
			], 'config');

			// Publishing the views.
			/*$this->publishes([
	                __DIR__.'/../resources/views' => resource_path('views/vendor/klorchid-cms'),
*/

			// Publishing assets.
			/*$this->publishes([
	                __DIR__.'/../resources/assets' => public_path('vendor/klorchid-cms'),
*/

			// Publishing the translation files.
			/*$this->publishes([
	                __DIR__.'/../resources/lang' => resource_path('lang/vendor/klorchid-cms'),
*/

			// Registering package commands.
			// $this->commands([]);
		}
	}
	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides(): array
	{

		return [
			KlorchidServiceProvider::class,

		];
	}


    public function facades():array
    {
        return [
            "klorchid-cms"=>KlorchidCms::class
        ];
    }

	/**
	 * Register provider.
	 *
	 * @return $this
	 */
	public function registerProviders(): self {

		foreach ($this->provides() as $provide) {

			$this->app->register($provide);
		}

		return $this;
	}

/*
	public function registerFacades() {

		foreach ($this->facades() as $keyname => $class) {
            //we use singletons as we dont want a new class every 
            //time we cal the facade
			$this->app->singleton($keyname, function () use ($class) {
				return new $class;
			});
		};

		return $this;
	}*/

	/**
	 * Register the application services.
	 */
	public function register() {
		// Automatically apply the package configuration
		$this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'klorchid-cms');

		$this->registerProviders();
			 //->registerFacades();
		// Register the main class to use with the facade
		$this->app->bind('prueba', function ($app) {
	            return new Prueba();
        }); 
        $this->app->singleton('klorchid-cms', function ($app) {
                return new KlorchidCms();
        });
	}
}
