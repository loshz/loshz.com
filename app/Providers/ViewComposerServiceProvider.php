<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\TwitterFeed;

class ViewComposerServiceProvider extends ServiceProvider
{

	public function boot()
	{
		view()->composer('layouts.partials.twitter-feed', function($view)
		{
			$tweet = TwitterFeed::getLatestTweet();

			$view->with('latestTweet', $tweet);
		});
	}

	public function register()
	{
		//
	}

}
