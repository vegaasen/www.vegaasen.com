/**
 * Build-file for the Frontend
 * todo: currently, the fonts/google folder is not being wiped. Not a biggie, however it must go, though :-)
 * todo: less with sourcemaps does not work as intended
 *
 * @author vegaasen
 * @version version 6
 * @since version 6
 */

/// <binding AfterBuild='default' Clean='clean' ProjectOpened='watch, default' />
require("es6-promise").polyfill();
var gulp = require("gulp");
var del = require("del");
var webServer = require('gulp-webserver');
var concat = require("gulp-concat");
var rename = require("gulp-rename");
var sourcemaps = require("gulp-sourcemaps");
var htmlreplace = require("gulp-html-replace");
var htmlmin = require("gulp-htmlmin");
var cssnano = require("gulp-cssnano");
var uglify = require("gulp-uglify");
var hash_src = require("gulp-hash-src");
var env = require("gulp-environments");
var less = require('gulp-less');
var googleWebFonts = require('gulp-google-webfonts');
var releaseEnvironment = env.make("release");
var debugEnvironment = env.make("debug");

var distPath = "dist/";
var configuration = {
    basePath: distPath,
    cssDistPath: distPath + "css/",
    fontsDistPath: distPath + "fonts/google/",
    jsDistPath: distPath + "app/",
    templateDistPath: distPath + "app/",
    imageDistPath: distPath + "images/",
    fontDistPath: distPath + "fonts/"
};

var extrasFiles = [
    "extras/humans.txt",
    "extras/robots.txt",
    "extras/.htaccess"
];
var jsExtFiles = [
    "node_modules/jquery/dist/jquery.js",
    "node_modules/lodash/lodash.js",
    "node_modules/chart.js/dist/Chart.bundle.js",
    "node_modules/smoothscroll/smoothscroll.js",
    "node_modules/jquery-parallax.js/parallax.js"
];
var jsLibFiles = [
    "lib/**/*.js"
];
var cssSrcFiles = [
    "node_modules/bootstrap/dist/css/bootstrap.css",
    "node_modules/font-awesome/css/font-awesome.css",
    "artifacts/**/*.css",
    configuration.cssDistPath + "**/my.css",
    configuration.fontsDistPath + "**/*.css"
];
var cssLessFiles = [
    "artifacts/**/my.less"
];
var htmlTemplateSrcFiles = [
    "app/**/*.html", "!app/index.html"
];
var imageSrcFiles = [
    "artifacts/images/**/*.png",
    "artifacts/images/**/*.jpg",
    "artifacts/images/**/*.bmp",
    "artifacts/images/**/*.gif"
];
var fontSrcFiles = [
    "node_modules/bootstrap/dist/fonts/glyphicons-halflings-regular.*",
    "node_modules/font-awesome/fonts/*.*",
    "node_modules/raleway-webfont/fonts/Raleway-Regular.*",
    "node_modules/lato-webfont/fonts/Lato-Regular.*",
    "node_modules/lato-webfont/fonts/Lato-Italic.*",
    configuration.fontsDistPath + "*.woff"
];

// *** DEFAULT ***

gulp.task("test", function () {
    console.log("****STARTING TESTING PHASE****");
    console.log(releaseEnvironment());
    console.log(debugEnvironment());
    console.log("****ENDING TESTING PHASE****");
});
gulp.task("clean", function () {
    return del(distPath + "*");
});
gulp.task("build", ["build-js", "build-css", "build-html", "build-images", "build-fonts", "build-extras"]);
gulp.task("default", ["clean", "build"]);
gulp.task('develop', ['watch', 'webServer']);

// *** WEBSERVER ***

gulp.task('webServer', ['watch', 'build'], function () {
    gulp.src('.')
        .pipe(webServer({
            livereload: false,
            directoryListing: true,
            open: "http://localhost:8000/" + distPath + "index.html"
        }));
});

// *** WATCHES ***

gulp.task("watch-js", function () {
    return gulp.watch(["app/**/*.js", "lib/**/*.js"], ["build-js-lib"]);
});
gulp.task("watch-html", function () {
    return gulp.watch(["app/**/*.html"], ["build-html"]);
});
gulp.task("watch-css", function () {
    return gulp.watch(["artifacts/**/*.css"], ["build-css"]);
});
gulp.task("watch-less", function () {
    return gulp.watch(["artifacts/**/*.less"], ["build-css"]);
});
gulp.task("watch", ["build", "watch-js", "watch-html", "watch-css", "watch-less"]);

// *** JS ***

gulp.task("clean-js", ["clean-js-app", "clean-js-lib", "clean-js-ext"]);
gulp.task("build-js", ["build-js-lib", "build-js-ext"], function () {
});

gulp.task("clean-js-lib", function () {
    return del([configuration.jsDistPath + "lib.js", configuration.jsDistPath + "lib.min.js", configuration.jsDistPath + "lib.min.js.map"]);
});
gulp.task("build-js-lib", ["clean-js-lib"], function () {
    // var sourceRoot = releaseEnvironment() ? "../lib" : __dirname + "/lib";
    var sourceRoot = "../../lib";
    return gulp.src(jsLibFiles)
        .pipe(sourcemaps.init())
        .pipe(concat("lib.min.js"))
        //.pipe(gulp.dest(configuration.jsDistPath))
        .pipe(releaseEnvironment(uglify()))
        //.pipe(rename("lib.min.js"))
        .pipe(sourcemaps.write(".", {includeContent: false, sourceRoot: sourceRoot}))
        .pipe(gulp.dest(configuration.jsDistPath));
});

gulp.task("clean-js-ext", function () {
    return del([configuration.jsDistPath + "ext.min.js"]);
});
gulp.task("build-js-ext", ["clean-js-ext"], function () {
    return gulp.src(jsExtFiles)
        .pipe(concat("ext.min.js"))
        //.pipe(gulp.dest(configuration.jsDistPath))
        .pipe(releaseEnvironment(uglify()))
        //.pipe(rename("ext.min.js"))
        .pipe(gulp.dest(configuration.jsDistPath));
});


// *** HTML ***

gulp.task("clean-html", ["clean-html-templates", "clean-html-index"]);
gulp.task("build-html", ["build-html-templates", "build-html-index"]);

gulp.task("clean-html-index", function () {
    return del([distPath + "index.html"]);
});
gulp.task("build-html-index", ["clean-html-index", "build-html-templates", "build-js"], function () {
    return gulp.src("app/index.html")
        .pipe(rename("index.html"))
        .pipe(htmlreplace({
            remove: [],
            js: ["app/ext.min.js", "app/lib.min.js"],
            css: ["css/styles.min.css"]
        }))
        .pipe(hash_src({build_dir: "./dist", src_path: "app", query_name: "", verbose: false}))
        .pipe(releaseEnvironment(htmlmin({collapseWhitespace: true, conservativeCollapse: true, removeComments: true})))
        .pipe(gulp.dest(distPath));
});

gulp.task("clean-html-templates", function () {
    return del([configuration.templateDistPath + "**/*.html"]);
});
gulp.task("build-html-templates", ["clean-html-templates"], function () {
    return gulp.src(htmlTemplateSrcFiles)
        .pipe(releaseEnvironment(htmlmin({collapseWhitespace: true, conservativeCollapse: true})))
        .pipe(gulp.dest(configuration.templateDistPath));
});

// *** GOOGLE FONTS ***
// TODO: should this even be used? Don't think so..

gulp.task("clean-google-fonts", function () {
    return del([configuration.fontsDistPath + "*.*"]);
});
gulp.task('build-google-fonts', ['clean-google-fonts'], function () {
    return gulp.src('./fonts.list')
        .pipe(googleWebFonts({}))
        .pipe(gulp.dest(configuration.fontsDistPath));
});

// *** FONTS ***

gulp.task("clean-fonts", function () {
    return del([configuration.fontDistPath + "*.*"]);
});
gulp.task("build-fonts", ["clean-fonts"], function () {
    return gulp.src(fontSrcFiles)
        .pipe(gulp.dest(configuration.fontDistPath));
});


// *** CSS ***

gulp.task("clean-css", function () {
    return del([configuration.cssDistPath + "*.css"]);
});
gulp.task("build-css", ["clean-css", 'build-less', 'build-google-fonts'], function () {
    return gulp.src(cssSrcFiles)
        .pipe(sourcemaps.init())
        .pipe(concat("styles.min.css"))
        .pipe(releaseEnvironment(cssnano({safe: true})))
        //.pipe(rename("styles.min.css"))
        .pipe(sourcemaps.write("."))
        .pipe(gulp.dest(configuration.cssDistPath));
});

// *** CSS > LESS ***

gulp.task('clean-less', function () {
    return del([configuration.cssDistPath + "**/my.css"]);
});

gulp.task('build-less', ['clean-less'], function () {
    return gulp.src(cssLessFiles)
        .pipe(sourcemaps.init())
        .pipe(less({compress: true}))
        .pipe(sourcemaps.write("."))
        .pipe(gulp.dest(configuration.cssDistPath));
});

// *** Images ***

gulp.task("clean-images", function () {
    return del([
        configuration.imageDistPath + "*.png",
        configuration.imageDistPath + "*.jpg",
        configuration.imageDistPath + "*.bmp",
        configuration.imageDistPath + "*.gif"
    ]);
});
gulp.task("build-images", ["clean-images"], function () {
    return gulp.src(imageSrcFiles)
        .pipe(gulp.dest(configuration.imageDistPath));
});

// *** EXTRAS ***

gulp.task("build-spoon", function () {
    return gulp.src("artifacts/spoon/*.*")
        .pipe(gulp.dest(configuration.basePath + "spoon/"));
});
gulp.task("build-favicon", function () {
    return gulp.src("artifacts/ico/*.*")
        .pipe(gulp.dest(configuration.basePath + "ico/"));
});
gulp.task("build-extras", ["build-spoon", "build-favicon"], function () {
    return gulp.src(extrasFiles)
        .pipe(gulp.dest(configuration.basePath));
});
