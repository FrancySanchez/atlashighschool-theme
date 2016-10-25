(function($) {

	// flatten object by concatting values
	function concatValues( obj ) {
	  var value = '';
	  for ( var prop in obj ) {
	    value += obj[ prop ] ;
	  }
	  return value;
	}

	$(document).ready(function(){

		// vars
		// Initializing the grid
		var grid = $('.js-schools').isotope();
		var filters =  [];

		// Filtering the grid
		$('.js-school-filters a').on('click', function(){

			$(this).toggleClass('btn-danger');
			var filterValue = '.' + $(this).attr('data-filter') + ',';

			if (filters.indexOf(filterValue) !== -1) {
				filters.pop(filterValue);
			}
			else{
				filters.push(filterValue);
			}

			var flatFilterObject = concatValues( filters );

			console.log(flatFilterObject);
			$(grid).isotope({ filter: flatFilterObject.slice(0, -1) });

		});


		// $(grid).isotope({ filter: '.public' });
		// $(grid).isotope({ filter: '.private' });
		// $(grid).isotope({ filter: '.homestay' });
		// $(grid).isotope({ filter: '.boarding-school' });
		// $(grid).isotope({ filter: '.mixed' });
		// $(grid).isotope({ filter: '.only-girls' });
		// $(grid).isotope({ filter: '.only-boys' });
		// $(grid).isotope({ filter: '.term' });
		// $(grid).isotope({ filter: '.year' });
		// $(grid).isotope({ filter: '.year-and-term' });
	});
	
	


})(jQuery);