var gulp     = require( 'gulp' ),
	argv     = require('yargs').argv,
	sequence = require( 'run-sequence' ),
	unzip    = require( 'gulp-unzip' ),
	download = require( 'gulp-download' ),
	bower    = require( 'gulp-bower' );

//Configs
var config = {
	src : '.',
	bower : './bower_components',
	frameworkDest : './inc/boldgrid-theme-framework',
};

gulp.copy = function ( src, dest ) {
    return gulp.src(src, {base:"."})
        .pipe( gulp.dest(dest) );
};

gulp.task('test', function () {
	return download( argv.child )
		.pipe( unzip() )
		.pipe( gulp.dest( './tmp' ) );
} );

gulp.task('move', function () {
	return gulp.src( './tmp/**/*' )
		.pipe( gulp.dest( './boldgrid-two' ) );
});

gulp.task('bower', function () {
	  return bower().pipe( gulp.dest( config.bower ) );
});

gulp.task('framework', function () {
	return gulp.src( config.bower + '/boldgrid-theme-framework/boldgrid-theme-framework/**/*' )
		.pipe( gulp.dest( config.frameworkDest ) );
});

gulp.task('standalone', function () {
	
	return gulp.src( [
	 '!./.git',
	 '!./.git/**',
	 '!./bower_components',
	 '!./bower_components/**',
	 '!./clone',
	 '!./node_modules',
	 '!./node_modules/**',
	 '!./inc/boldgrid-theme-framework',
	 '!./inc/boldgrid-theme-framework/**',
	 './**/*'
	] )
	.pipe( gulp.dest( '../boldgrid-two' ) );
});

//Tasks
gulp.task( 'tester', function ( cb ) {
	sequence (
		'test',
		'move',
		cb
	);
});

//Tasks
gulp.task( 'build', function ( cb ) {
  sequence (
    'bower',
    'framework',
    'cleanup',
    cb
  );
});