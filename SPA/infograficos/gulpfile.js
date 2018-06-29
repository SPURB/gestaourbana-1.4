var gulp = require('gulp');
	concat = require('gulp-concat');
	uglify = require('gulp-uglify-es').default;
	scss = require('gulp-sass');
	cssnano = require('gulp-cssnano');

gulp.task('oucae-js', function() {
	return gulp.src([
		// './dev/componentes/um.js', 
		// './dev/componentes/dois.js', 
		'./dev/componentes/tooltipBox.js', 
		'./dev/oucae/oucae.js'
	])
	.pipe(concat('oucae.min.js'))
	.pipe(gulp.dest('dist'))
	.pipe(uglify())
	.pipe(gulp.dest('dist'))
});

gulp.task('oucae-scss', function() {
	return gulp.src([
		'./dev/oucae/oucae.scss' 
	])
	.pipe(concat('oucae.min.css'))
	.pipe(scss())
	.pipe(cssnano())
	.pipe(gulp.dest('./dist'))
});

gulp.task('default', [
	'oucae-js',
	'oucae-scss'
	], function (){
  gulp.watch('./**/*.js', ['oucae-js']); 
  gulp.watch('./**/*.scss', ['oucae-scss']); 
})