(function () {
    jQuery('#menuToggle, .menu-close').on('click', function () {
        jQuery('#menuToggle').toggleClass('active');
        jQuery('body').toggleClass('body-push-toleft');
        jQuery('#theMenu').toggleClass('menu-open');
    });
})(jQuery);