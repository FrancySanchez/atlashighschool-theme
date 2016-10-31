(function($) {

    function checkingMenuOverflow() {

        var 
        menu = $('.js-mainMenu'),
        menuWidth = menu.outerWidth(),
        itemsWidth = 0,
        toggler = $('.js-responsive-main-menu-toggle'),
        returnValue = false;

        $('.js-mainMenu li').each(function() {
            itemsWidth += $(this).outerWidth();
        });

        // Cheking if there is an oveflow or if we are on a mobile resolution
        if (menuWidth < itemsWidth || $('body').outerWidth() < 640) {

            menu.addClass('c-responsive-navbar');

            // Removing all desktop navbar classes
            menu.find('.c-navbar').removeClass();
            menu.find('.c-navbar__submenu').removeClass();
            menu.find('.c-navbar__menu').removeClass();
            
            // Showing the toggler
            toggler.show();

            // Placing the enquire button (based on a class .js-enquire-button)
            var enquire = $('.js-equire-button a');
            enquire.clone().appendTo($('.js-header')).wrap('<div class="c-responsive-navbar__enquire-button"></div>');

            returnValue = true;
        }
        return returnValue;
    };


    function responsiveMenuBehaviour() {
        var menu = $('.js-mainMenu');
        var toggler = $('.js-responsive-main-menu-toggle');
        var closer = $('.js-responsive-main-menu-closer');
        var overlayHTML = '<div class="js-overlay c-navbar__overlay"></div>';

        if (menu.length) {

            // Create overlay
            $('body').append(overlayHTML);

            // Opening the menu
            toggler.click(function() {
                menu.animate({ right: 0, }, 300);
                $('.js-responsive-main-menu-closer').animate({ right: 270, }, 300);
                $('.js-overlay, .js-responsive-main-menu-closer').show();
                $('.js-overlay, .js-responsive-main-menu-closer').animate({ opacity: 1 }, 300);

            });

            // Closing the menu
            $('.js-overlay, .js-responsive-main-menu-closer ').click(function() {
                menu.animate({ right: [-270, 'swing'], }, 300);
                $('.js-overlay, .js-responsive-main-menu-closer').animate({ opacity: 0 }, 200);
                $('.js-overlay, .js-responsive-main-menu-closer').hide();
            })

        }
    };
    $(document).ready(function() {
        if (checkingMenuOverflow()) {
            responsiveMenuBehaviour();
        }
    });
})(jQuery)