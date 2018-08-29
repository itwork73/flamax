var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var notify = require('gulp-notify');

var sourcesPath = './sources';
var assetsPath = './assets';

var jslibs = [
    sourcesPath + '/js/vendors/jquery-1.12.0.min.js',
    sourcesPath + '/js/vendors/swiper.jquery.min.js',
    sourcesPath + '/js/vendors/jquery.eventer.js',
    sourcesPath + '/js/vendors/jquery.selectric.min.js',
    sourcesPath + '/js/app.js'
];

gulp.task('sass', function() {
    return gulp.src(sourcesPath + '/sass/main.scss')
        .pipe(plumber())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 5 versions', 'opera 12', '> 1% in RU', 'ie 8']
        }))
        .pipe(gulp.dest(assetsPath));
});




gulp.task('js', function(){
    return gulp.src(jslibs)
        .pipe(plumber())
        .pipe(concat(assetsPath + '/main.js'))
        // .pipe(uglify())
        .pipe(gulp.dest('./'))
        .pipe(notify('Complete!'));
});

gulp.task('watch', function() {
    gulp.watch(sourcesPath + '/sass/**/*.scss', ['sass']);
    gulp.watch(jslibs, ['js']);
});