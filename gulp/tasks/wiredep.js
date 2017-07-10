var gulp 			= require('gulp'),
	wiredep 		= require('wiredep').stream,
	config 			= require('../config');

 
gulp.task('bower', function(){
	
	gulp.src(config.bower.src + config.bower.index)
	.pipe(wiredep({
		ignorePath : '../',
		fileTypes: {
            html: {
                replace: {
                    js: '<script src="src/{{filePath}}"></script>',
                    css: '<link rel="stylesheet" href="src/{{filePath}}" />'
                }
            }
        }
		}))
	.pipe(gulp.dest('./'));
});



