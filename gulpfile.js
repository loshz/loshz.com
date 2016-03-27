var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefix = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var minifyCSS = require('gulp-minify-css');
var plumber = require('gulp-plumber');

var sassDir = 'assets/sass/';
var targetCSSDir = 'public/assets/css/';

var jsDir = 'assets/js/';
var targetJSDir = 'public/assets/js/';

function handleError(err) {
	console.log(err.toString());
	this.emit('end');
}

gulp.task('css', function() {
	return gulp.src(sassDir + '**/*.scss')
		.pipe(plumber({ errorHandler: handleError }))
		.pipe(sass())
		.pipe(autoprefix('last 10 versions'))
		.pipe(minifyCSS())
		.pipe(plumber.stop())
		.pipe(gulp.dest(targetCSSDir));
});

gulp.task('js', function() {
	return gulp.src(jsDir + '**/*.js')
		.pipe(plumber({ errorHandler: handleError }))
		.pipe(concat('site.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest(targetJSDir));
});

gulp.task('watch', function() {
	gulp.watch(sassDir + '**/*.scss', ['css']);
	gulp.watch(jsDir + '**/*.js', ['js']);
});

gulp.task('default', ['css', 'js']);
