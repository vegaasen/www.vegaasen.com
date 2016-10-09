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
gulp.task('clean', function (cb) {
    del([
        'dist'
    ], cb);
});
gulp.task('bower', function () {
    var install = require("gulp-install");
    return gulp.src(['./bower.json'])
        .pipe(install());
});
gulp.task('build-css', ['clean'], function () {
    return gulp.src('./assets/css/*')
        .pipe(sourcemaps.init())
        .pipe(less())
        .pipe(cachebust.resources())
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('./dist'));
});
gulp.task('build-template-cache', ['clean'], function () {
    var ngHtml2Js = require("gulp-ng-html2js"), concat = require("gulp-concat");
    return gulp.src("./partials/*.html")
        .pipe(ngHtml2Js({
            moduleName: "todoPartials",
            prefix: "/partials/"
        }))
        .pipe(concat("templateCachePartials.js"))
        .pipe(gulp.dest("./dist"));
});
gulp.task('jshint', function () {
    gulp.src('/js/*.js')
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
        entries: './js/app.js',
        debug: true,
        paths: ['./js/controller', './js/service', './js/directive', './js/filter'],
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
        .pipe(gulp.dest('./dist/js/'));
});
gulp.task('build', ['clean', 'bower', 'build-css', 'build-template-cache', 'jshint', 'build-js'], function () {
    return gulp.src('index.html')
        .pipe(cachebust.references())
        .pipe(gulp.dest('dist'));
});
gulp.task('watch', function () {
    return gulp.watch(['./index.html', './partials/*.html', './styles/*.*css', './js/**/*.js'], ['build']);
});
gulp.task('webserver', ['watch', 'build'], function () {
    gulp.src('.')
        .pipe(webserver({
            livereload: false,
            directoryListing: true,
            open: "http://localhost:8000/dist/index.html"
        }));
});
gulp.task('dev', ['watch', 'webserver']);
/////////////////////////////////////////////////////////////////////////////////////
//
// generates a sprite png and the corresponding sass sprite map.
// This is not included in the recurring development build and needs to be run separately
//
/////////////////////////////////////////////////////////////////////////////////////

gulp.task('sprite', function () {

    var spriteData = gulp.src('./images/*.png')
        .pipe(spritesmith({
            imgName: 'todo-sprite.png',
            cssName: '_todo-sprite.scss',
            algorithm: 'top-down',
            padding: 5
        }));

    spriteData.css.pipe(gulp.dest('./dist'));
    spriteData.img.pipe(gulp.dest('./dist'))
});

gulp.task('default', ['sprite', 'build', 'test']);