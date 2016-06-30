//Variaveis dos diretorios de arquivos

var filesJS = [
"./Src/Assets/js/*.js"
];

var filesCSS = [
"./Src/Assets/css/*.css"
];

// Núcleo do Gulp
var gulp = require('gulp');

// Transforma o javascript em formato ilegível para humanos
var uglify = require("gulp-uglify");

// Agrupa todos os arquivos em um
var concat = require("gulp-concat");

// // Verifica alterações em tempo real, caso haja, compacta novamente todo o projeto
// var watch = require('gulp-watch');

// Minifica o CSS
var cssmin = require("gulp-cssmin");

// Remove comentários CSS
var stripCssComments = require('gulp-strip-css-comments');

// Processo que agrupará todos os arquivos CSS, removerá comentários CSS e minificará.
gulp.task('minify-css', function(){
  gulp.src(filesCSS)
  .pipe(concat('style.min.css'))
  .pipe(stripCssComments({all: true}))
  .pipe(cssmin())
  .pipe(gulp.dest('./Public/css/'));
});

// Tarefa de minificação do Javascript
gulp.task('minify-js', function () {
  gulp.src(filesJS)                        // Arquivos que serão carregados, veja variável 'js' no início
  .pipe(concat('script.min.js'))      // Arquivo único de saída
  .pipe(uglify())                     // Transforma para formato ilegível
  .pipe(gulp.dest('./Public/js/'));          // pasta de destino do arquivo(s)
});

// Tarefa padrão quando executado o comando GULP
gulp.task('default',['minify-js','minify-css']);

// Tarefa de monitoração caso algum arquivo seja modificado, deve ser executado e deixado aberto, comando "gulp watch".
gulp.task('watch', function() {
  gulp.watch(filesJS, ['minify-js']);
  gulp.watch(filesCSS, ['minify-css']);
});

