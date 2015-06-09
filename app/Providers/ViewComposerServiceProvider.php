<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;
use Thujohn\Twitter\Facades\Twitter;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		view()->composer('layouts.partials.twitter-feed', function($view)
		{
			if (Cache::has('latestTweet'))
			{

				$tweet = Cache::get('latestTweet');

			} else {

				$tweet = Twitter::getUserTimeline(array('screen_name' => 'danbondd', 'count' => 1, 'format' => 'json', 'include_rts' => 0, 'exclude_replies' => 1));

				Cache::put('latestTweet', $tweet, 60);

			}

			if (!is_null($tweet))
			{

				$view->with('latestTweet', json_decode($tweet));

			}
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
