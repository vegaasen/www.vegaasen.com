(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
    a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-20060878-1', 'auto');

ga('send', 'pageview');

/*
 * Helpers --v
 */

function analyticsMenuItem(element) {
    ga('send', 'event', 'sidebar', 'menu-item', element);
}

function analyticsSocialize(element) {
    ga('send', 'event', 'socialize', element);
}