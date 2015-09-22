@if (! empty($latestTweet))
<div class="twitter-feed">
	<div class="inner">
        <img src="{{ Config::get('app.url') }}assets/images/icons/twitter-dark.png" alt="Twitter"/>
		<h4>{!! $latestTweet->tweet !!}</h4>
		<p>{{ date('jS F Y', strtotime($latestTweet->tweet_created_at)) }}</p>
	</div>
</div>
@endif