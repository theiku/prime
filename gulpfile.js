/**
 * Primary Tasks:
 * 
 * gulp install-framework: Places the theme framework in your inc folder.
 */

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
	defaultThemeFolderName : 'starter-master',
	mergeDest : './generated/',
	tempDir : './boldgrid-gulp-parent-temp',
	bower : './bower_components',
	defaultChild : 'https://github.com/BoldGrid/starter/archive/master.zip',
	frameworkDest : '/inc/boldgrid-theme-framework',
	localFramework : '../boldgrid-theme-framework/boldgrid-theme-framework',
};

config.themeFolderName = ( argv.themeFolderName) ? argv.themeFolderName : config.defaultThemeFolderName;
config.mergeDest += config.themeFolderName;

/**
 * Child Download
 */
gulp.task('child-download', function () {
	var child = ( argv.child ) ? argv.child : config.defaultChild,
		childZip = ( argv.childZip ) ? argv.childZip : '',
		zip;
	
	if ( childZip ) {
		zip = gulp.src( childZip );
	} else {
		zip = download( child );
	}
	
	return zip
		.pipe( unzip() )
		.pipe( gulp.dest( config.tempDir ) );
} );

gulp.task('child-copy-files', function () {
	return gulp.src( [
		config.tempDir + '/' + config.themeFolderName + '/**',
		'!' + config.tempDir + '/' + config.themeFolderName + '/',
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
		.pipe( gulp.dest( '.' + config.frameworkDest ) );
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
	 '!./generated',
	 '!./generated/**',
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

//Create a child theme with framework in same directory.
gulp.task( 'generate-local', function ( cb ) {
  sequence (
    'clean-output',
    'local-framework',
    'parent',
    'child-theme',
    cb
  );
});

// Create a child theme with bower dependencies.
gulp.task( 'generate', function ( cb ) {
	sequence (
		'clean-output',
		'install-framework',
		'parent',
		'child-theme',
		cb
	);
});

// Install theme framework into the parent theme.
gulp.task( 'install-framework', function ( cb ) {
	return sequence (
		'bower',
		'framework',
		cb
	);
});