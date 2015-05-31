@if (!is_null($latestTweet) || !empty($latestTweet))
<div class="twitter-feed">
	<div class="inner">
        <img src="{{ Config::get('app.url') }}assets/imgs/icons/twitter-dark.png" alt="Twitter"/>
		<h4>{!! Twitter::linkify($latestTweet[0]->text) !!}</h4>
		<p>{{ date('jS F Y', strtotime($latestTweet[0]->created_at)) }}</p>
	</div>
</div>
@endif