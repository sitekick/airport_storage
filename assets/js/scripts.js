(function($){
	
	//match body class with nav id; expects last body class to match a nav id
	var classes = $('body').attr('class');
	var page = classes.split(' ').pop();
	
	if( typeof page === 'string') {
		$('#main-menu').find('a#' + page).parent('li').addClass('active');
	}
		
	
})(jQuery);