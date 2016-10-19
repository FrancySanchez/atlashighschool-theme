(function($) {
    // Site title
    $('.js-school-filters a').on('click', function(e){
        
        // Esto es para evitar el salto 
        e.preventDefault();

       var filter = $(this).attr('data-filter');

       // console.log(filter);

       $('.js-schools > div').each(function(){

            if (!($(this).hasClass(filter))) {
                $(this).toggle();
            }

       });
    });

})(jQuery);
