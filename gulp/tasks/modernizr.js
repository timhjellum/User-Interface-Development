const gulp = require('gulp'),
modernizr = require('gulp-modernizr');

//const dist = '//WWWDEV/website/global/styles';
//const dist = '//REPLICATOR/website/css_rehab/archive/global/scripts';
//const dist = './global/styles';
const dist = './style-guide/src/scripts';

gulp.task('modernizr', function() {
  return gulp.src(['./style-guide/assets/styles/**/*.less', './style-guide/assets/scripts/**/*.js'])
    .pipe(modernizr({
      "options": [
        "setClasses"
      ]
    }))
    .pipe(gulp.dest(dist))
});