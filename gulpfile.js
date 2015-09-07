var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefix = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var watch = require('gulp-watch');
var plumber = require('gulp-plumber');
var gargoyle = require('gargoyle');
var minifyCSS = require('gulp-minify-css');
var livereload = require('gulp-livereload');

var LIVERELOAD_PORT = 35729;

var sassDir = 'resources/assets/sass/';
var targetCSSDir = 'public/assets/css/';

var jsDir = 'resources/assets/js/';
var targetJSDir = 'public/assets/js/';

function handleError(err) {
	console.log(err.toString());
	this.emit('end');
}

function watcher(path, task, poll) {
	var options = {
		type: 'watchFile',
		interval: poll
	};
	gargoyle.monitor(path, options, function(err, monitor) {
		if(err) {
			console.log(err);
			return;
		}
		monitor.on('modify', function(filename) {gulp.start(task)});
		monitor.on('delete', function(filename) {gulp.start(task)});
		monitor.on('create', function(filename) {gulp.start(task)});
	});
}

gulp.task('css', function() {
	return gulp.src(sassDir + '**/*.scss')
		.pipe(plumber({ errorHandler: handleError }))
		.pipe(sass())
		.pipe(autoprefix('last 10 versions'))
		.pipe(minifyCSS())
		.pipe(plumber.stop())
		.pipe(gulp.dest(targetCSSDir))
		.pipe(livereload({auto:false}));
});

gulp.task('js', function() {
	return gulp.src(jsDir + '**/*.js')
		.pipe(plumber({ errorHandler: handleError }))
		.pipe(concat('site.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest(targetJSDir))
		.pipe(livereload({auto:false}));
});

gulp.task('watch', function() {
	livereload.listen(LIVERELOAD_PORT);
	watcher(sassDir, 'css');
	watcher(jsDir, 'js');
});

gulp.task('default', ['css', 'js']);
