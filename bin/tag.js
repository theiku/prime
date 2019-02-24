const path = require( 'path' ),
	fs = require( 'fs' ).promises,
	shell = require( 'shelljs' );

let args = process.argv.slice( 2 );

if ( ! args ) {
	console.log( 'You must enter path to file to update version number in.' );
	process.exit( 1 );
}

let file = path.resolve( args[0] ),
	version = args[1];

// Update version.
( async () => {
	let content = await fs.readFile( file, 'utf8' );
	let locate = content.replace( /\r/g, '\n' ),
	regex = /^[ \t\/*#@]*Version*?:(.*)$/gmi,
	match = regex.exec( locate );
	match = match[1].replace( /\s*(?:\*\/|\?>).*/, '' ).trim();
	content = content.replace( match, version );
	await fs.writeFile( file, content, 'utf8' );
} )().then( () => {
	const cmds = [
		`git config --global user.email ${ process.env.BGTFW_AUTO_UPDATE_AUTHOR }`,
		`git config --global user.name ${ process.env.BGTFW_AUTO_UPDATE_EMAIL }`,
		`yarn config set version-tag-prefix ""`,
		'yarn config set version-git-message "Version %s Release"',
		`yarn config set version-git-tag false`,
		`yarn version --new-version ${ process.env.BGTFW_AUTO_UPDATE_TAG } --no-git-tag-version --no-commit-hooks`,
		`git commit -am "Updating version to ${ process.env.BGTFW_AUTO_UPDATE_TAG }"`,
		'git push origin dev',
		'git checkout master',
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
