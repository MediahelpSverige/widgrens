var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

gulp.task('default', function() {
  // place code for your default task here
});

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "localhost:8080",
        online: true,
        ui: {
          port: 3001
        },
        port: 8080
    });

    gulp.watch("./scss/*.scss", ['sass']);
    gulp.watch("./css/*.css").on('change', browserSync.reload);
    gulp.watch("app/*.html").on('change', browserSync.reload);
    gulp.watch("*.php").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("/scss/*.scss")
        .pipe(sass())
        .pipe(sourcemaps.init())
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest("./css"))
        .pipe(browserSync.stream());
});
