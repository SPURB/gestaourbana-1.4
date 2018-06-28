var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

gulp.task('oucae', function() {
	gulp.src([
		'./componentes/um.js', 
		'./oucae/oucae.js', 
	])
	.pipe(concat('oucae.min.js'))
	// .pipe(uglify())
	.pipe(gulp.dest('./dist/'))
});
