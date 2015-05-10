$(document).ready(function() {

	var previousScroll = 0, headerHeight = $('header').outerHeight();

	$(window).on('scroll', function(event) {
	   nav();
	});

	$('header .menu-action').on('click', function(event) {
		event.preventDefault();
		$('div.menu, header').toggleClass('active');
		$('body').toggleClass('no-scroll');
	});

	$('.backToTop').on('click', function(event) {
		event.preventDefault();
		$('html, body').animate({scrollTop: 0});
	});

	function nav() {
		var currentScroll = $(this).scrollTop();

		if (currentScroll > headerHeight) {
		   if (currentScroll < previousScroll){
		   	$('header').removeClass('scroll');
		   } else {
		   	$('header').addClass('scroll');
		   }
		}

		previousScroll = currentScroll;

		if(!$(window).scrollTop()) {
		 $('header').removeClass('scroll');
		}
	}

});
