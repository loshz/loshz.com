@include ('layouts.partials.twitter-feed')

<div class="contact">
    <div class="inner">
        @if(Request::segment(1) == 'contact')
        <h3>Interested to see what I've been working on?</h3>
        <a href="{{ url('projects') }}">Take a look</a>
        @else
        <h3>Have a project idea you'd like to discuss?</h3>
        <a href="{{ url('contact') }}">Let's talk</a>
        @endif
    </div>
</div>

<footer>
	<div class="inner">
		<ul class="links">
			<li><a href="{{ url('about') }}" class="text">About</a></li>
			<li><a href="{{ url('projects') }}" class="text">Projects</a></li>
			<li><a href="{{ url('contact') }}" class="text">Contact</a></li>
			<li><a href="https://github.com/danbondd" target="_blank" class="github">GitHub</a></li>
			<li><a href="https://twitter.com/danbondd" target="_blank" class="twitter">Twitter</a></li>
			<li><a href="https://www.linkedin.com/in/danbondd" target="_blank" class="linkedin">LinkedIn</a></li>
			<li><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fdanbond.co%2F&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21&amp;appId=206204792758592"></iframe></li>
		</ul>

		<h4>&copy; 2015 Dan Bond.</h4>
	</div>
</footer>
