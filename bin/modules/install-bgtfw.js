const got = require( 'got' ),
	unzip = require( 'unzip-stream' ),
	pkgDir = require( 'pkg-dir' ),
	del = require( 'del' );

module.exports = async () => {
	const rootDir = await pkgDir( __dirname );
	await del( [ `${ rootDir }/inc/boldgrid-theme-framework` ] );
	got.stream( 'https://github.com/BoldGrid/boldgrid-theme-framework/releases/latest/download/bgtfw.zip' )
		.pipe( unzip.Extract( { path: 'inc' } ) );
};
