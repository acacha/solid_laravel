<?php namespace SolidLaravel\Providers;

use Illuminate\Support\ServiceProvider;

class InvoiceServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
        // App::bind('SolidLaravel\Repositories\Contracts\InvoiceRepositoryInterface','SolidLaravel\Repositories\InvoiceRepositoryDB');
        // App::bind('SolidLaravel\Output\Contracts\InvoiceShowInterface','SolidLaravel\Output\InvoiceShowHtml');
        $this->app->bind(
            'SolidLaravel\Repositories\Contracts\InvoiceRepositoryInterface',
            'SolidLaravel\Repositories\InvoiceRepositoryDB'
		);

                $this->app->bind(
			'SolidLaravel\Output\Contracts\InvoiceShowInterface',
			'SolidLaravel\Output\InvoiceShowHtml'
		);
	}

}
