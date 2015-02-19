var gulp = require('gulp'),

    // other plugins
    browserSync = require('browser-sync'),
    reload = browserSync.reload,
    rename = require('gulp-rename'),
    notify = require('gulp-notify'),
    
    // css plugins
    sass = require('gulp-ruby-sass'),
    minifycss = require('gulp-minify-css'),
    postcss = require('gulp-postcss'),
    autoprefixer = require('autoprefixer-core'),

    // js plugins
    jshint = require('gulp-jshint'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify');


// Launch Server
gulp.task('browser-sync', function() {
    browserSync({
        proxy: "http://localhost:8888"
    });
});
 



// Compile SASS
gulp.task('styles', function() {
  return sass('development/scss/main.scss', {
    require: "susy",
    style: "compressed"
  })
    .pipe(postcss([ autoprefixer({ browsers: ['last 2 version'] }) ]))
    .pipe(gulp.dest('site_assets/css'))
    .pipe(rename('style.css'))
    .pipe(gulp.dest('../Blankulp'))
    .pipe(reload({stream:true}))
    .pipe(notify({ message: 'Styles done' }));
});




// Scripts
gulp.task('scripts', function() {
  return gulp.src('development/js/main.js')
    .pipe(concat('main.js'))
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'))
    .pipe(gulp.dest('site_assets/js'))
    .pipe(reload({stream:true}))
    .pipe(notify({ message: 'Scripts done mayne' }));
});


// Min Scripts
gulp.task('minscripts', function() {
  return gulp.src('development/js/main.js')
    .pipe(concat('main.js'))
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'))
    .pipe(uglify())
    .pipe(rename('main.min.js'))
    .pipe(gulp.dest('site_assets/js'))
    .pipe(notify({ message: 'Minscripts done mayne' }));
});
 
 



// Watch for changes
gulp.task('watch', function () {
    // Watch .scss files
    gulp.watch('development/scss/**/*.scss', ['styles']);
    
    // Watch .js files
    gulp.watch('development/js/main.js', ['scripts']);
})
 
 



gulp.task('default', ['browser-sync', 'watch']);