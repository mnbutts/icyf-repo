/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Include necessary modules
var gulp = require('gulp'),
        browserSync = require('browser-sync'),
        rename = require('gulp-rename'),
        sass = require('gulp-sass'),
        autoprefixer = require('gulp-autoprefixer');

var styleSRC = './sass/style.scss';
var styleDIST = './css/';


//Configure Browsersync.
gulp.task('browser-sync', function() {
    var files = [
        './style.css',
        './*.php'
    ];

// Initialize
    browserSync.init(files, {
        proxy: "icyfhost"
    });
});

//Configure Sass task to run
//Browsersync will also reload browsers.
gulp.task('sass', function() {
    return gulp.src('sass/*.scss')
            .pipe(sass({
                'outputStyle': 'compressed'
            }))
            .pipe(gulp.dest('./'))
            .pipe(browserSync.stream());
});

//testing autoprefixer (not original)
gulp.task('style', function(){
    gulp.src( styleSRC )
          .pipe(sass({
            errorLogToConsole: true,
              'outputStyle': 'compressed'
            }))
            .on('error', console.error.bind(console))
            .pipe( autoprefixer({
                browsers: ['last 2 versions'],
                cascade: false
            }))
            .pipe( rename( { suffix: 'min'}))
            .pipe(gulp.dest( styleDIST ));
});

//Create the default
gulp.task('default', ['sass', 'browser-sync'], function() {
    gulp.watch("sass/**/*.scss",['sass']);
});
