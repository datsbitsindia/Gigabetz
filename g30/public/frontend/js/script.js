(function ($) {
    "use strict";
	// search bar
	$(document).ready(function() {
		// $("#search-sh").click(function() {
			// $(".search-element").slideToggle("slow");
		// });
		$('#search-sh').on('click',function () {
			$('.show-sh').toggleClass('show-s');
		});
	});
		
	
})(jQuery);