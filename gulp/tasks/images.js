var gulp 	= require('gulp'),
	cache = require('gulp-cached'),
	config 	= require('../config');


gulp.task('images', function() {
  /* Copy all libraries to build folder */
  return gulp.src(config.images.src)
    .pipe(cache('lib'))
    .pipe(gulp.dest(config.images.dest));
});

