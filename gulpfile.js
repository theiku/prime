var gulp     = require( 'gulp' ),
	argv     = require('yargs').argv,
	sequence = require( 'run-sequence' ),
	unzip    = require( 'gulp-unzip' ),
	download = require( 'gulp-download' ),
	debug    = require( 'gulp-debug' ),
	del      = require( 'del' ),
	bower    = require( 'gulp-bower' );

//Configs
var config = {
	src : '.',
	mergeDest : '../qboldgrid-two',
	tempDir : './boldgrid-gulp-parent-temp',
	bower : './bower_components',
	defaultChild : 'https://github.com/BoldGrid/starter/archive/master.zip',
	frameworkDest : '/inc/boldgrid-theme-framework',
	localFramework : '../boldgrid-theme-framework/boldgrid-theme-framework',
};

/**
 * Child Download
 */
gulp.task('child-download', function () {
	var child = ( argv.child ) ? argv.child : config.defaultChild;
	
	return download( child )
		.pipe( unzip() )
		.pipe( gulp.dest( config.tempDir ) );
} );

gulp.task('child-copy-files', function () {
	return gulp.src( [
		config.tempDir + '/starter-master/**',
		'!' + config.tempDir + '/starter-master/',
		'!' + config.tempDir + '/*/functions.php',
		'!' + config.tempDir + '/*/README.md',
		'!' + config.tempDir + '/*/LICENSE',
		] )
	.pipe( debug() )
	.pipe( gulp.dest( config.mergeDest ) );
});

gulp.task('child-remove-temp', function () {
	return del( config.tempDir ) ;
} );

// Download framework.
gulp.task('bower', function () {
	  return bower().pipe( gulp.dest( config.bower ) );
});

// Copy from bower into parent dest.
gulp.task('framework', function () {
	return gulp.src( config.bower + '/boldgrid-theme-framework/boldgrid-theme-framework/**/*' )
		.pipe( gulp.dest( config.mergeDest + config.frameworkDest ) );
});
// Copy from bower into parent dest.
gulp.task('local-framework', function () {
	return gulp.src( [
			config.localFramework + '/**/*'
     	] )
     	.pipe( gulp.dest( config.mergeDest + config.frameworkDest )  );
	
});

//Copy parent into new copy.
gulp.task('parent', function () {
	
	return gulp.src( [
	 '!./.git',
	 '!./.git/**',
	 '!./bower_components',
	 '!./bower_components/**',
	 '!./clone',
	 '!./gulpfile.js',
	 '!./package.json',
	 '!./bower.json',
	 '!./node_modules',
	 '!./node_modules/**',
	 '!./inc/boldgrid-theme-framework',
	 '!./inc/boldgrid-theme-framework/**',
	 './**/*'
	] )
	.pipe( gulp.dest( config.mergeDest ) );
});

// Remove an existing copy of merge theme.
gulp.task( 'clean-output', function () {
	return del( config.mergeDest, { force: true } );
});

// Copy child into merged.
gulp.task( 'child-theme', function ( cb ) {
	sequence (
		'child-download',
		'child-copy-files',
		'child-remove-temp',
		cb
	);
});

// Tasks.
gulp.task( 'generate-local', function ( cb ) {
  sequence (
    'clean-output',
    'local-framework',
    'parent',
    'child-theme',
    cb
  );
});
gulp.task( 'generate', function ( cb ) {
	sequence (
		'clean-output',
		'bower',
		'framework',
		'parent',
		'child-theme',
		cb
	);
});