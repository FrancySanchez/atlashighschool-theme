(function($) {
    // Site title
    var navbar = $('.js-header'),
        navbarHeight = navbar.height();

    $(window).scroll(function() {

        if ($(window).scrollTop() > navbarHeight && $('body').outerWidth() > 640) {
            navbar.addClass("c-header--fixed-top");

        } else {
            navbar.removeClass("c-header--fixed-top");
        }
    });


})(jQuery);
