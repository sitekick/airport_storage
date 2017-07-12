var gulp 	= require('gulp'),
	watch 	= require('gulp-watch'),
	config 	= require('../config');

gulp.task('watch', function() {
	gulp.watch(config.sass.src, ['sass']);
	gulp.watch(config.scripts.src, ['scripts']);
	gulp.watch(config.images.src, ['images']);
	gulp.watch(config.templates.src.inc, ['includes']);
	gulp.watch(config.templates.src.tpl, ['bower']);
});