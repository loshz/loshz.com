'use strict';

var Site = {

    init: function() {
        Site.googleAnalyticsLinkEvent();
    },

    googleAnalyticsLinkEvent: function() {
        $('a.external').on('click', function() {
            var source = $(this).attr('data-source');
            ga('send', 'event', 'Link', 'Click', source);
        });
    },

};

(function() {
    Site.init();
})();