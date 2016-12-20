<?php
/**
 * Archive Page Entry Header Template
 *
 * This file contains the markup for the archive page's
 * entry header.
 *
 * @package Prime
 */
?>

<header class="page-header">
	<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="taxonomy-description">', '</div>' );
	?>
</header><!-- .page-header -->
