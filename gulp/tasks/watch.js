const gulp = require('gulp');
const watch = require('gulp-watch');
const browserSync = require('browser-sync').create();

gulp.task('default', ['watch']);

gulp.task('watch', function() {
  browserSync.init({
    notify: false,
    server: {
      baseDir: "style-guide"
    }
  });
  watch('./style-guide/index.html', () =>
    browserSync.reload()
  );
	watch('./style-guide/assets/styles/**/*.less', () => gulp.start('cssInject'));
	watch('./style-guide/assets/scripts/**/*.js', () => gulp.start('scriptsRefresh'))
});

gulp.task('cssInject', ['styles'], () =>
    gulp.src('./style-guide/temp/styles/eia-styles.min.css')
    .pipe(browserSync.stream())
);

gulp.task('scriptsRefresh', ['scripts'], () =>
  browserSync.reload()
);
