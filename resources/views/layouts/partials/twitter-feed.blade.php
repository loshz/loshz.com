@if (!is_null($latestTweet) || !empty($latestTweet))
<div class="twitter-feed">
	<div class="inner">
		<h1>Latest Tweet</h1>
		<hr>
		<h3>{!! Twitter::linkify($latestTweet[0]->text) !!}</h3>
		<h4>{{ date('jS F Y', strtotime($latestTweet[0]->created_at)) }}</h4>
	</div>
</div>
@endif