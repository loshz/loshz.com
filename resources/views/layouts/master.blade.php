<!DOCTYPE html>
<html lang="en">
<head>
@include ('layouts.partials.meta')

@if (App::environment('production'))
<script>
window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
ga('create', 'UA-31900712-2', 'auto');
ga('send', 'pageview');
</script>
<script async src='//www.google-analytics.com/analytics.js'></script>
@endif
</head>
<body class="{{ (Request::segment(1)=='' ? 'home' : Request::segment(1)) }}">

	<div class="wrapper">

		@include ('layouts.partials.header')

		@yield('content')

		@include ('layouts.partials.footer')

	</div>

	@if(App::environment('local'))
		<script src="{{url('/')}}:35729/livereload.js?snipver=1" async></script>
	@endif

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="{{ Config::get('app.url') }}assets/js/site.min.js"></script>

</body>
</html>
