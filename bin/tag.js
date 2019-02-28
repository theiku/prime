const path = require( 'path' ),
	fs = require( 'fs' ).promises,
	shell = require( 'shelljs' ),
	wpTextdomain = require( 'wp-textdomain' ),
	headerUpdate = require( 'wp-header-update' ),
	getBGTFW = require( './modules/install-bgtfw.js' ),
	zip = require( './modules/zip.js' );

let args = process.argv.slice( 2 );

if ( ! args ) {
	console.log( 'You must enter path to file to update version number in.' );
	process.exit( 1 );
}

let file = path.resolve( args[0] ),
	version = args[1];

async function setConfigs() {
	let cmds = [
		'git checkout dev'
		`git config --global user.email ${ process.env.BGTFW_AUTO_UPDATE_AUTHOR }`,
		`git config --global user.name ${ process.env.BGTFW_AUTO_UPDATE_EMAIL }`,
		`yarn config set version-tag-prefix ""`,
		'yarn config set version-git-message "Version %s Release"',
		`yarn config set version-git-tag false`,
	];

	cmds.map( cmd => {
		if ( shell.exec( cmd ).code !== 0 ) {
			console.log( `Failed to autodeploy when running ${ cmd }` );
			shell.exit( 1 );
			process.exitCode = 1;
		}
	} );
}

// Update version.
( async () => {
	await setConfigs();
	await getBGTFW();
	await headerUpdate( 'Version', version );
	await headerUpdate( 'Text Domain', 'boldgrid-prime' );
	wpTextdomain( '../**/*.php', {
		domain: [ 'boldgrid-prime', 'kirki' ],
		fix: true,
		force: true
	} );
	zip( {
		name: 'bgtfw',
		source: [ '**' ],
		globOpts: {
			dot: false,
			ignore: [
				'codesniffer.ruleset.xml',
				'package.json',
				'README.md',
				'yarn.lock',
				'bin',
				'bin/**'
			]
		}
	} );

} )().then( () => {
	const cmds = [
		`yarn version --new-version ${ process.env.BGTFW_AUTO_UPDATE_TAG } --no-git-tag-version --no-commit-hooks`,
		`git commit -am "Updating version to ${ process.env.BGTFW_AUTO_UPDATE_TAG }"`,
		'git push origin dev',
		'git checkout master',
		`git pull origin dev`,
		'git push origin master',
		`git tag -a ${ process.env.BGTFW_AUTO_UPDATE_TAG } -m "Version ${ process.env.BGTFW_AUTO_UPDATE_TAG } Release"`,
		`git push origin ${ process.env.BGTFW_AUTO_UPDATE_TAG } 2>&1`
	];

	// Execute tagging.
	cmds.map( cmd => {
		if ( shell.exec( cmd ).code !== 0 ) {
			console.log( `Failed to autodeploy when running ${ cmd }` );
			shell.exit( 1 );
			process.exitCode = 1;
		}
	} );
} ).catch( console.error );
