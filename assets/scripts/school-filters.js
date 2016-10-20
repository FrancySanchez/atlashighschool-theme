// (function($) {
//     // Site title
//     $('.js-school-filters a').on('click', function(e){
        
//         // Esto es para evitar el salto 
//         e.preventDefault();
//         if ($(this).hasClass('btn-danger')) {
//             $(this).removeClass('btn-danger').addClass('btn-secondary');
//         }
//         else{
//             $(this).addClass('btn-danger').removeClass('btn-secondary');
//         };


//        var filter = $(this).attr('data-filter');

//        // console.log(filter);

//        $('.js-schools > div').each(function(){

//             if (!($(this).hasClass(filter))) {
//                 $(this).toggle();
//             }

//        });
//     });

// })(jQuery);
