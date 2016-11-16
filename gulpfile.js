var gulp = require('gulp');
var sass = require('gulp-ruby-sass');    

gulp.task('sass', function () {
  return sass('scss/*.scss')
    .on('error', sass.logError)
    .pipe(gulp.dest('./css/'));
});