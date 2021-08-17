var gulp = require('gulp');

var plugins = require('gulp-load-plugins')({
  'config': require('./package.json'),
  'pattern': ['*'],
  'scope': ['dependencies','devDependencies']
});

gulp.task('sass:front', require('./tasks/sass')(gulp, plugins, 'main', '../dist/css', false));

gulp.task('sass', gulp.parallel('sass:front'));

// Watch
gulp.task('watch:sass', function () {
  gulp.watch('./sass/**/*.scss', gulp.series('sass'));
});

gulp.task('watch', gulp.parallel('sass', 'watch:sass'));

gulp.task('default', gulp.parallel('sass'));
