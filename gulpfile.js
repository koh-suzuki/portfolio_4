// 各モジュールの読み込み
const gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
sass.compiler = require("dart-sass"); // sassのコンパイルにdart-sassを使用する
const rename = require('gulp-rename');
var autoprefixer = require("gulp-autoprefixer");

// sassコンパイルの設定
function sassCompile(){
  return (
    gulp 
      // 読み込みファイルをセット
      .src('scss/style.scss')
      // コンパイルの実行
      .pipe(sass())
      // 書き出すファイル名を指定
      .pipe(rename('style.css'))
      .pipe(autoprefixer({browsers: ["last 3 versions", "ie >= 9", "Android >= 4","ios_saf >= 8"]}))
      // 指定した場所にcssを書き出し
      .pipe(gulp.dest('/css/'))
  )
}
// "sassCompile"として使用する
exports.sassCompile = sassCompile;

function watch(){
  gulp.watch('sass',sassCompile);
}

// "npx gulp"でwatchを実行する
exports.default = watch;

// 「npx gulp」でsassコンパイルを実行
// exports.default = sassCompile;