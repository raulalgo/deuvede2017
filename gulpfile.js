var gulp = require('gulp');
var browserSync = require('browser-sync').create();

gulp.task('serve', function(){

	browserSync.init({
		proxy: "http://localhost:8888"
	});

	gulp.watch("./*.php").on('change',browserSync.reload);
	gulp.watch("./bassplate/css/*.css").on('change',browserSync.reload);
});