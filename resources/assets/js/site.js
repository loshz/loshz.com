'use strict';

var Site = {

    options: {
        previousScroll: 0,
        headerHeight: $('#header').outerHeight(),
        screenWidth: $(window).width()
    },

    init: function() {
        Site.menu();
        Site.homePageArrow();
        Site.googleAnalyticsLinkEvent();
        Site.googleAnalyticsFormEvent();

        if (Site.options.screenWidth > 600) {
            $(window).on('scroll', function() {
                Site.stickyHeader();
            });
        }
    },

    stickyHeader: function() {
        var currentScroll = $(window).scrollTop();

        if (currentScroll > Site.options.headerHeight) {
            if (currentScroll < Site.options.previousScroll){
                $('#header').removeClass('scroll top');
            } else {
                $('#header').addClass('scroll').delay(300).queue(function(){
                    $('#header').removeClass('top');
                });
            }
        }

        Site.options.previousScroll = currentScroll;

        if( ! $(window).scrollTop()) {
            $('#header').removeClass('scroll').addClass('top');
        }
    },

    menu: function() {
        $('#menu-action').on('click', function() {
            $('div.menu, header').toggleClass('active');
            $('body').toggleClass('no-scroll');
        });
    },

    homePageArrow: function() {
        $('#homePageArrow').on('click', function() {
            $('html, body').animate({
                scrollTop: $('#about').offset().top
            });
        });
    },

    googleAnalyticsLinkEvent: function() {
        $('a.external').on('click', function() {
            var source = $(this).attr('data-source');
            ga('send', 'event', 'Link', 'Click', source);
        });
    },

    googleAnalyticsFormEvent: function() {
        $('.contact-form').on('submit', function() {
            ga('send', 'event', 'Form', 'Submit', 'Contact');
        });
    }

};

(function() {
    Site.init();
})();