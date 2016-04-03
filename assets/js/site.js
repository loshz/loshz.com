'use strict';

var Site = {

    init: function() {
        Site.googleAnalyticsLinkEvent();
    },

    googleAnalyticsLinkEvent: function() {
        var socialButtons = document.getElementsByClassName('external');

        for (var i = 0; i < socialButtons.length; i++) {
            socialButtons[i].addEventListener('click', function() {
                var source = this.getAttribute('data-source');
                ga('send', 'event', 'Link', 'Click', source);
            }, false);
        }
    },

};

(function() {
    Site.init();
})();