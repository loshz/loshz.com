<!DOCTYPE html>
<html lang="en">
<head>

	@include ('layouts.partials.meta')

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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="{{ Config::get('app.url') }}assets/js/site.min.js"></script>

	@if (App::environment('production'))
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-31900712-2', 'auto');
	  ga('send', 'pageview');

	</script>
	@endif

</body>
</html>
