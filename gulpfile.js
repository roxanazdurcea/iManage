var gulp = require('gulp'),
    gutil = require('gulp-util'),
    uglify = require('gulp-uglify'),
    rename = require("gulp-rename"),
    less = require('gulp-less'),
    cleanCSS = require('gulp-clean-css'),
    purify = require('gulp-purifycss'),
    concat = require('gulp-concat'),
    path = require('path'),
    pump = require('pump');

var lessSources = ['src/less/files/**/*.less'];


gulp.task('concatLess', function() {
    return gulp.src(lessSources)
        .pipe(concat('style.less'))
        .pipe(gulp.dest('src/less/'));
});

gulp.task('less', function() {
    return gulp.src('src/less/style.less')
        .pipe(less({
            paths: [path.join(__dirname, 'less')]
        }))
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('wp-content/themes/iManage'));
});

gulp.task('default', ['concatLess','less', 'watch']);

gulp.task('watch', function() {
    gulp.watch(lessSources, ['concatLess']);
    gulp.watch('src/less/style.less', ['less']);
});