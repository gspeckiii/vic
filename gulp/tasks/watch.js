var gulp = require('gulp'),
watch=require('gulp-watch'),
browserSync=require("browser-sync").create();

gulp.task('watch',function(){
	browserSync.init({
		proxy: 'vic/',
    	port: 8000,
		notify: false,
		ui: {
    port: 8080
}
	});
	watch('./public/index.php',function(){
		browserSync.reload();
	});

	watch('./public/css/**/*.css',function(){
	 gulp.start('cssInject');
	
	});
	watch('./public/js/**/*.js',function(){
		gulp.start('scriptsRefresh');
		
	});
});

gulp.task('cssInject',['styles'],function() {
	return gulp.src('./public/compile/style/styles.css')
	.pipe(browserSync.stream());
	
});
gulp.task('scriptsRefresh',['scripts'],function(){
	browserSync.reload();
})