var sass = require('gulp-sass')(require('sass'));;
var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));

gulp.task('sass', function(){
  return gulp.src('scss/*.scss')
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('css'))
});



