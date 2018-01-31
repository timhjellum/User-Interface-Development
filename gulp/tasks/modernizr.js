var gulp = require('gulp'),
modernizr = require('gulp-modernizr');

gulp.task('modernizr', function() {
  return gulp.src(['./style-guide/assets/styles/**/*.less', './style-guide/assets/scripts/**/*.js'])
    .pipe(modernizr({
      "options": [
        "setClasses"
      ]
    }))
    .pipe(gulp.dest('../global/scripts/'))
//    .pipe(gulp.dest('../global/vendor/'));
});