var gulp         = require('gulp'),
    sass         = require('gulp-sass'),
    concat       = require('gulp-concat'), // Подключаем gulp-concat (для конкатенации файлов
    uglify       = require('gulp-uglifyjs'), // Подключаем gulp-uglifyjs (для сжатия JS)
    cssnano      = require('gulp-cssnano'), //Подключаем пакет для минификации CSS
    rename       = require('gulp-rename'), // Подключаем библиотеку для переименования файлов
    del          = require('del'), // Подключаем библиотеку для удаления файлов и папок
    imagemin     = require('gulp-imagemin'), // Подключаем библиотеку для работы с изображениями
    pngquant     = require('imagemin-pngquant'), // Подключаем библиотеку для работы с png
    cache        = require('gulp-cache'), // Подключаем библиотеку для автоматического добавления префиксов
    autoprefixer = require('gulp-autoprefixer'); // Подключаем библиотеку для автоматического добавления префиксов


gulp.task('sass', function(){
    return gulp.src('app/sass/**/*.sass')
        .pipe(sass())
        .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8'], {cascade:true}))
        .pipe(gulp.dest('app/css'));
});

gulp.task('scripts', function(){
    return gulp.src([
        'app/libs/jquery/dist/jquery.min.js',
        'app/libs/animejs/anime.min.js',
        'app/libs/waypoints/lib/jquery.waypoints.min.js',
        'app/libs/swiper/dist/js/swiper.min.js',
        'app/libs/bootstrap/js/bootstrap.min.js'
    ]).pipe(concat('libs.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('app/js'));
});

// gulp.task('browser-sync', function() { // Создаем таск browser-sync
//     browserSync({ // Выполняем browserSync
//         server: { // Определяем параметры сервера
//             baseDir: 'app' // Директория для сервера - app
//         },
//         notify: false // Отключаем уведомления
//     });
// });

gulp.task('watch', function(){
    gulp.watch('app/sass/**/*.sass', ['sass']);
});

gulp.task('css-libs', function(){
    return gulp.src([
        'app/libs/bootstrap/css/bootstrap.min.css',
        'app/libs/swiper/dist/css/swiper.min.css'
    ])
        .pipe(concat('libs.min.css'))
        .pipe(cssnano())
        .pipe(gulp.dest('app/css'));
});
gulp.task('styles-css',['clean-app-css', 'sass', 'css-libs'], function(){
    return gulp.src([
        'app/css/main.css'
    ])
        .pipe(cssnano())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('app/css'));

});
gulp.task('build', ['clean', 'img', 'styles-css','scripts'], function(){
    var buildCss = gulp.src('app/css/*.min.css').pipe(gulp.dest('production/css')),
        
        buildFonts = gulp.src('app/fonts/**/*').pipe(gulp.dest('production/fonts')),
        
        buildJs = gulp.src('app/js/**/*').pipe(gulp.dest('production/js'));
        
        // buildHtml = gulp.src('app/*.html').pipe(gulp.dest('production/'));
        console.log('Build - Ready!');
});

gulp.task('clean', function(){
    console.log('clean!!!!!');
    return del.sync('production/');

});

gulp.task('clean-app-css', function(){
    return del.sync('app/css/*.min.css');

});

gulp.task('clear-cache', function(){
    return cache.clearAll();
});

gulp.task('img', function(){
    return gulp.src('app/img/**/*')
        .pipe(cache(imagemin({
            interlaced: true,
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use:[pngquant()]
            
    })))
        .pipe(gulp.dest('production/img'));
});