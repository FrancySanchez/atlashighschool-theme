(function($) {

    $(document).ready(function(){
        if ($('body').outerWidth() > 640){

            // Showing dropdown if menu item has childrens
            $('.menu-item-has-children > a').on('click', function(e){
                e.preventDefault();
                $(this).next('.js-submenu').toggle();
            });

            // Hiding visible submenus if clicked outside
            // $(window).click(function() {

            //    $('.js-mainMenu').
            // });

        }
    });
    
    


})(jQuery);
