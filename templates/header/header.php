<?php
/**
 * Header Template
 *
 * This file contains the markup for the header template.
 *
 * @package Prime
 */

?>

<header id="masthead" <?php BoldGrid::add_class( 'header', [ 'header' ] ); ?> role="banner" <?php BoldGrid_Framework_Schema::header( true ); ?>>
	<div class="custom-header-media">
		<?php the_custom_header_markup(); ?>
	</div>
	<?php do_action( 'boldgrid_menu_secondary', [ 'menu_class' => BoldGrid::get_container_classes( 'header' ) ] ); ?>
	<div id="navi-wrap" <?php BoldGrid::add_class( 'navi_wrap' ); ?>>
		<div id="navi" <?php BoldGrid::add_class( 'navi' ); ?>>
			<?php do_action( 'boldgrid_site_identity' ); ?>
			<?php do_action( 'boldgrid_menu_main' ) ?>
		</div>
	</div>
	<?php do_action( 'boldgrid_header_bottom' ); ?>
</header><!-- #masthead -->
