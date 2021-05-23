const gulp = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const browserSync = require('browser-sync');

gulp.task('sass', async function(){
    gulp.src('assets/sass/style.scss')
        .pipe(concat('style.css'))
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('assets/css/'))
})
gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "localhost/balcerzak",
        notify: true
    });
    gulp.watch('assets/sass/style.scss', gulp.series('sass')).on('change', browserSync.reload);

})