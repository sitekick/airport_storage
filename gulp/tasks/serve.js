var gulp = require('gulp'),
	bs = require('browser-sync').create(),
	config 	= require('../config');
	
gulp.task('serve', function () {
    
    bs.init({
		proxy: 'airport.imac',
		ui : false
	});
	
	bs.watch('./assets/css/style.css').on('change', bs.reload);
	
	
});


