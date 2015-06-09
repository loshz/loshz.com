<?php

namespace App\Providers;

use Validator;
use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
	    Validator::extend('name', function($attribute, $value, $parameters) {
		    return preg_match('/^[a-z \-]+$/i', $value);
	    });

	    Validator::extend('phone', function($attribute, $value, $parameters) {
		    return preg_match("/^([0-9\s\-\+\(\)]*)$/", $value);
	    });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
