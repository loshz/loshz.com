$(document).ready(function() {

    var previousScroll = 0, headerHeight = $('header').outerHeight();

    $(window).on('scroll', function() {
        if($(window).width() > 600) {
            nav();
        }
    });

    $('header #menu-action').on('click', function(e) {
        e.preventDefault();
        $('div.menu, header').toggleClass('active');
        $('body').toggleClass('no-scroll');
    });

    $('.arrow').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('#about').offset().top
        });
    });

    $('.backToTop').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0});
    });

    function nav() {
        var currentScroll = $(this).scrollTop();

        if (currentScroll > headerHeight) {
            if (currentScroll < previousScroll){
                $('header').removeClass('scroll top');
            } else {
                $('header').addClass('scroll').delay(300).queue(function(){
                    $(this).removeClass('top');
                });
            }
        }

        previousScroll = currentScroll;

        if(!$(window).scrollTop()) {
            $('header').removeClass('scroll').addClass('top');
        }
    }

});
