(function($) {


	$(document).ready(function(){

		// vars
		// Initializing the grid
		var grid = $('.js-schools').isotope(
			{
				 itemSelector: '.js-school'
			});
		var filters =  {};

		// Filtering the grid
		$('.js-school-filters a').on('click', function(){

			$(this).addClass('btn-danger');
			$(this).parent().siblings().find('a').removeClass('btn-danger');

		
			// get group key
			var buttonGroup = $(this).closest('.list-inline');

			var filterGroup = buttonGroup.attr('data-filter-group');

			// set filter for group
			filters[ filterGroup ] = $(this).attr('data-filter');

			// combine filters
			var filterValue = concatValues( filters );
			grid.isotope({ filter: filterValue });

		});

		$('.js-reset-filters').on('click', function(){
			$('.js-school-filters a.js-reset').click();	
			console.log('yo');
		});

		// flatten object by concatting values
			function concatValues( obj ) {
			  var value = '';
			  for ( var prop in obj ) {
			    value += obj[ prop ] ;
			  }
			  console.log(value);
			  return value;
			}



	});
	
	


})(jQuery);