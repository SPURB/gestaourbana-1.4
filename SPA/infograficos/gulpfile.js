var gulp = require('gulp');
	concat = require('gulp-concat');
	uglify = require('gulp-uglify-es').default;
	scss = require('gulp-sass');
	cssnano = require('gulp-cssnano');
	imagemin = require('gulp-imagemin');
	cache = require('gulp-cache');


/*
 	OUC Água Espraiada
*/
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


/*
	OUC Faria Lima
*/
gulp.task('oucfl-js', function() {
	return gulp.src([
		'dev/componentes/tooltipbox.js', 
		'dev/oucfl/oucfl.js'
	])
	.pipe(concat('oucfl.min.js'))
	.pipe(gulp.dest('dist'))
	.pipe(uglify())
	.pipe(gulp.dest('dist'))
});

gulp.task('oucfl-scss', function() {
	return gulp.src([
		'dev/componentes/tooltipbox.scss',
		'dev/oucfl/oucfl.scss',		 
	])
	.pipe(concat('oucfl.min.css'))
	.pipe(scss())
	.pipe(cssnano())
	.pipe(gulp.dest('./dist'))
});


gulp.task('images', function(){
	return gulp.src('dev/images/**/*.+(png|jpg|jpeg|gif|svg)')
	.pipe(cache(imagemin()))
	.pipe(gulp.dest('dist/images'))
});

gulp.task('oucae', [
	'oucae-js',
	'oucae-scss',
	'images'
	], function (){
	console.log("atualize /infografico-oucae/ para visualizar as alterações")
	gulp.watch('./**/*.js', ['oucae-js']); 
	gulp.watch('./**/*.scss', ['oucae-scss']); 
})

gulp.task('oucfl', [
	'oucfl-js',
	'oucfl-scss',
	'images'
	], function (){
	console.log("atualize /infografico-oucfl/ para visualizar as alterações")
	gulp.watch('./**/*.js', ['oucfl-js']); 
	gulp.watch('./**/*.scss', ['oucfl-scss']); 
})

gulp.task('default', [
	'oucae-js', 	'oucfl-js',
	'oucae-scss', 	'oucfl-scss',
	'images'
	], function (){
	console.log("atualize /infografico-oucae/ ou /infografico-oucfl/ para visualizar as alterações")
	gulp.watch('./**/*.js', ['oucae-js', 	'oucfl-js']); 
	gulp.watch('./**/*.scss', ['oucae-scss','oucfl-scss' ]); 
})
