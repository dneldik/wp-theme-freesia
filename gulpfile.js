const { src, dest, series, watch } = require('gulp');
const sass = require('gulp-sass');
const prefixer = require('gulp-autoprefixer');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');

const sassTranspile = function() {
  return src('assets/sass/*.sass')
    .pipe(sass().on('error', sass.logError))
    .pipe(dest('assets/css/'));
}

const addPrefixes = function() {
  return src('assets/css/*.css')
    .pipe(prefixer())
    .pipe(dest('assets/css/'));
}

const babelTranspile = function() {
  return src('assets/src/*.js')
    .pipe(babel({ presets: ['@babel/env'] }))
    .pipe(dest('assets/js/'));
}

const minify = function() {
  return src('assets/js/*.js')
    .pipe(uglify())
    .pipe(dest('assets/js/'));
}

exports.default = function() {
  watch(
    'assets/sass/*.sass',
    series(sassTranspile, addPrefixes)
  );
  watch(
    'assets/src/*.js',
    series(babelTranspile, minify)
  );
};
