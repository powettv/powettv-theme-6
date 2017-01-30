var gulp = require('gulp'),
	sass = require('gulp-sass'),
// jshint = require('gulp-jshint'),
// uglify = require('gulp-uglify'),
// rename = require('gulp-rename'),
// concat = require('gulp-concat'),
// notify = require('gulp-notify'),
// cache = require('gulp-cache'),
//    sourcemaps = require('gulp-sourcemaps'),
	del = require('del');

// Sass
gulp.task('sass', function() {
	return gulp.src(['src/styles/**/*'])
		.pipe(sass({
			trace: true, 
			verbose: true,
			outputStyle: 'compressed',
			includePaths: ['node_modules/susy/sass']
		}).on('error', sass.logError))
		.pipe(gulp.dest('./dist/css'));
});

// Templates
gulp.task('templates', function() {
	return gulp.src('src/templates/**/*.{php,css}')
		.pipe(gulp.dest('./dist'));
});

// gulp.task('scripts', function() {
//   return gulp.src(['src/scripts/**/*.js', '!src/scripts/**/*.min.js'])
//     .pipe(jshint.reporter('default'))
//     //.pipe(concat('index.js'))
//     .pipe(gulp.dest('dist/scripts'))
//     .pipe(notify({ message: 'Scripts task complete' }));
// });

// gulp.task('minScripts', function(){
//     return gulp.src(['src/scripts/**/*.min.js',])
//         .pipe(gulp.dest('dist/scripts'));
// });

// gulp.task('markup', function() {
//     return gulp.src('src/**/*.html')
//         .pipe(gulp.dest('dist'));
// });

// gulp.task('images', function() {
//     return gulp.src('src/images/**/*.*')
//         .pipe(gulp.dest('dist/images'));
// });

gulp.task('default', function() {
    gulp.start('templates', 'sass');
//    gulp.start('clean');
});

// gulp.task('clean', ['scripts'], function() {
//     return del(['scripts/main.js']);
// });

gulp.task('watch', function() {
  // gulp.watch(['src/images/**/*.*'], ['images'])
  // gulp.watch(['src/**/*.html'], ['markup']);
  // gulp.watch(['src/styles/**/*.scss', 'src/styles/modules/*.scss'], ['styles']);
  // gulp.watch(['src/scripts/**/*.js', '!src/scripts/**/*.min.js', '!src/scripts/**/main.js'], ['scripts', 'minScripts', 'clean']);
});