(function($) {
    // Site title
    var navbar = $('.js-nav-bar'),
        navbarHeight = navbar.height();

    $(window).scroll(function() {

        if ($(window).scrollTop() > navbarHeight) {

            navbar.addClass("c-navbar--fixed-top");
        } else {
            navbar.removeClass("c-navbar--fixed-top");

        }
    });


})(jQuery);
