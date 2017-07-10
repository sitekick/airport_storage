var gulp 	= require('gulp'),
	concat 	= require('gulp-concat'),
	config 	= require('../config');


gulp.task('scripts', function() {
	/* copies custom scripts and non-bower vendor to scripts.js */
	gulp.src(config.scripts.src)
	.pipe(concat('scripts.js'))
	.pipe(gulp.dest(config.scripts.dest));
});

