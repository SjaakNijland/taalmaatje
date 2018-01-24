
// require
var gulp            = require('gulp');

var sass            = require('gulp-sass');
var rename          = require('gulp-rename');
var autoprefixer    = require('gulp-autoprefixer');

var uglify          = require('gulp-uglify');
var concat          = require('gulp-concat');

var browserSync     = require('browser-sync');
var reload          = browserSync.reload;
var plumber         = require('gulp-plumber');
var sourcemaps      = require('gulp-sourcemaps');



// php
gulp.task('php', function(){
    gulp.src('./**/*.php')
    .pipe(reload({stream: true}));
});



// html
gulp.task('html', function(){
    gulp.src('./**/*.html')
    .pipe(reload({stream: true}));
});



// sass
gulp.task('sass', function(){
    gulp.src('./src/sass/app.sass')
    .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(rename({suffix: '.min'}))
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(gulp.dest('./dist/css'))
    .pipe(sourcemaps.write())
    .pipe(reload({stream: true}));
});



// js
gulp.task('js', function(){
    gulp.src('./src/js/app.js')
    .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(concat('app.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./dist/js'))
    .pipe(sourcemaps.write())
    .pipe(reload({stream: true}));
});




// watch
gulp.task('watch', function(){
    gulp.watch('./dist/**/*.php', ['php'])
    gulp.watch('./dist/**/*.html', ['html'])
    gulp.watch('./src/**/*.sass', ['sass'])
    gulp.watch('./src/**/*.scss', ['sass'])
    gulp.watch(['./src/**/*.js','!./src/**/app.min.js'], ['js']);
});



// browser sync
gulp.task('browser-sync', function() {
    browserSync.init({

        // app dir
        proxy: 'localhost/taalmaatje/dist/'
    });
});



// default
gulp.task('default', ['watch', 'php', 'html', 'sass', 'js', 'browser-sync']);
