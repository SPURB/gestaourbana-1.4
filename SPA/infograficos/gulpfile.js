var gulp = require('gulp');
	concat = require('gulp-concat');
	uglify = require('gulp-uglify-es').default;
	scss = require('gulp-sass');
	cssnano = require('gulp-cssnano');
	imagemin = require('gulp-imagemin');
	cache = require('gulp-cache');

gulp.task('oucae-js', function() {
	return gulp.src([
		'dev/componentes/tooltipbox.js', 
		'dev/oucae/oucae.js'
	])
	.pipe(concat('oucae.min.js'))
	.pipe(gulp.dest('dist'))
	.pipe(uglify())
	.pipe(gulp.dest('dist'))
});

gulp.task('oucae-scss', function() {
	return gulp.src([
		'dev/componentes/tooltipbox.scss',
		'dev/oucae/oucae.scss',		 
	])
	.pipe(concat('oucae.min.css'))
	.pipe(scss())
	.pipe(cssnano())
	.pipe(gulp.dest('./dist'))
});

gulp.task('images', function(){
	return gulp.src('dev/images/**/*.+(png|jpg|jpeg|gif|svg)')
	.pipe(cache(imagemin()))
	.pipe(gulp.dest('dist/images'))
});

gulp.task('default', [
	'oucae-js',
	'oucae-scss', 
	'images'
	], function (){
	gulp.watch('./**/*.js', ['oucae-js']); 
	gulp.watch('./**/*.scss', ['oucae-scss']); 
	console.log("atualize /infografico-oucae/ para visualizar as alterações")
})
