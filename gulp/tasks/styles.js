var gulp = require('gulp'),
postcss=require('gulp-postcss'),
autoprefixer=require('autoprefixer'),
cssvars=require('postcss-simple-vars'),
nested=require('postcss-nested'),
cssimport=require('postcss-import'),
mixins=require('postcss-mixins'),
hexrgba=require('postcss-hexrgba');


gulp.task('styles', function() {
	return gulp.src('./public/css/styles.css')
		.pipe(postcss([cssimport,mixins,cssvars, nested, hexrgba, autoprefixer]))
		.on('error',function(errorInfo){
			this.emit('end');
			console.log(errorInfo.toString());
		})
		.pipe(gulp.dest('./public/compile/styles'));
});
