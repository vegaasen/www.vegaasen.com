var gulp = require('gulp'),
    webserver = require('gulp-webserver'),
    del = require('del'),
    less = require('gulp-less'),
    jshint = require('gulp-jshint'),
    sourcemaps = require('gulp-sourcemaps'),
    spritesmith = require('gulp.spritesmith'),
    browserify = require('browserify'),
    source = require('vinyl-source-stream'),
    buffer = require('vinyl-buffer'),
    uglify = require('gulp-uglify'),
    gutil = require('gulp-util'),
    ngAnnotate = require('browserify-ngannotate'),
    CacheBuster = require('gulp-cachebust');
var cachebust = new CacheBuster();
var Server = require('karma').Server;

var config = {
    publicDir: './public'
};

gulp.task('clean', function (cb) {
    del([config.publicDir], cb);
});
gulp.task('bower', function () {
    var install = require("gulp-install");
    return gulp.src(['./bower.json'])
        .pipe(install());
});
gulp.task('build-css', ['clean'], function () {
    return gulp.src('./app/static/css/*')
        .pipe(sourcemaps.init())
        .pipe(less())
        .pipe(cachebust.resources())
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest(config.publicDir));
});
gulp.task('build-template-cache', ['clean'], function () {
    var ngHtml2Js = require("gulp-ng-html2js"), concat = require("gulp-concat");
    return gulp.src("./app/partials/*.html")
        .pipe(ngHtml2Js({
            moduleName: "todoPartials",
            prefix: "/partials/"
        }))
        .pipe(concat("templateCachePartials.js"))
        .pipe(gulp.dest(config.publicDir));
});
gulp.task('jshint', function () {
    gulp.src('/app/js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});
gulp.task('test', function (done) {
    new Server({
        configFile: __dirname + '/karma.conf.js',
        singleRun: true
    }, done).start();
});
gulp.task('build-js', ['clean'], function () {
    var b = browserify({
        entries: './app/js/app.js',
        debug: true,
        paths: ['./app/js/controller', './app/js/service', './app/js/directive', './app/js/filter'],
        transform: [ngAnnotate]
    });
    return b.bundle()
        .pipe(source('bundle.js'))
        .pipe(buffer())
        .pipe(cachebust.resources())
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(uglify())
        .on('error', gutil.log)
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(config.publicDir + '/js/'));
});
gulp.task('build', ['clean', 'bower', 'build-css', 'build-template-cache', 'jshint', 'build-js'], function () {
    return gulp.src('./app/index.html')
        .pipe(cachebust.references())
        .pipe(gulp.dest(config.publicDir));
});
gulp.task('watch', function () {
    return gulp.watch(['./app/index.html', './app/partials/*.html', './app/static/css/*.*css', './app/js/**/*.js', './app/static/js/**/*.js'], ['build']);
});
gulp.task('webserver', ['watch', 'build'], function () {
    gulp.src('.')
        .pipe(webserver({
            livereload: false,
            directoryListing: true,
            open: "http://localhost:8000/" + config.publicDir + "/index.html"
        }));
});
gulp.task('dev', ['watch', 'webserver']);
gulp.task('default', ['build']); //skipped test for now..