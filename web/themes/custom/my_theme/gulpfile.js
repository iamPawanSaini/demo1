const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const babel = require('gulp-babel');
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');

// Compile SCSS files and minify CSS
gulp.task('sass', function() {
  return gulp
    .src('scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('css'));
});

// Process JavaScript files
gulp.task('js', function() {
  return gulp
    .src('js/**/*.js')
    .pipe(babel({
      presets: ['@babel/env']
    }))
    .pipe(gulp.dest('js'));
});

// Watch for changes
gulp.task('watch', function() {
  gulp.watch('scss/**/*.scss', gulp.series('sass'));
  gulp.watch('js/**/*.js', gulp.series('js'));
});

// Default task
gulp.task('default', gulp.series('sass', 'js', 'watch'));
