<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Validation;

class ValidationServiceProvider extends ServiceProvider {

	public function register(){}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		
		$this->app->validator->resolver(function($translator, $data, $rules, $messages) {

			return new Validation($translator, $data, $rules, $messages);

		});

	}

}
