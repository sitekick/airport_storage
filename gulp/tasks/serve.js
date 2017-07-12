var gulp = require('gulp'),
	bs = require('browser-sync').create(),
	config 	= require('../config');
	
gulp.task('serve', function () {
    
    bs.init({
		proxy: 'airport.imac',
		ui : false
	});
	
	bs.watch('./assets/css/style.css').on('change', bs.reload);
	bs.watch('./assets/js/scripts.js').on('change', bs.reload);
	bs.watch('./assets/img/**/*.{gif,png,svg,jpg}').on('change', bs.reload);
	bs.watch('./assets/inc/*').on('change', bs.reload);
	bs.watch('./*.php').on('change', bs.reload);
			
	
});


