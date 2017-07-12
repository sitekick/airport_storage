var gulp 	= require('gulp'),
	cache = require('gulp-cached'),
	config 	= require('../config');


gulp.task('includes', function() {
  /* Copy all templates to assets/inc folder */
  return gulp.src(config.templates.src.inc)
    .pipe(cache('includes'))
    .pipe(gulp.dest(config.templates.dest.inc));
});

