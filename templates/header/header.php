<?php
/**
 * Header Template
 *
 * This file contains the markup for the header template.
 *
 * @package Prime
 */

// Get the theme configs.
global $boldgrid_theme_framework;
$configs = $boldgrid_theme_framework->get_configs();
?>

<header id="masthead" <?php bgtfw_header_class( basename( __FILE__, '.php' ) ); ?> role="banner" <?php BoldGrid_Framework_Schema::header( true ); ?>>
	<div class="custom-header-media">
		<?php the_custom_header_markup(); ?>
	</div>
	<div id="navi" <?php bgtfw_inner_header_class() ?>>

		<?php

		$image_attributes = wp_get_attachment_image_src( absint( get_theme_mod( 'boldgrid_logo_setting' ) ), 'full' );
		$alt_tag = get_post_meta( get_theme_mod( 'boldgrid_logo_setting' ), '_wp_attachment_image_alt', true );

		$alt = '';
		if ( ! empty( $alt_tag ) ) {
			$alt = 'alt="' . $alt_tag . '"';
		}

		if ( $image_attributes ) {
			$site_logo = '<img ' . esc_attr( $alt ) . ' src="' . esc_attr( $image_attributes[0] ) . '" width="' . esc_attr( $image_attributes[1] ) . '" height="' . esc_attr( $image_attributes[2] ) . '" />';
		} ?>
		<?php do_action( 'boldgrid_site_identity' ); ?>

		<?php if ( has_nav_menu( 'main' ) ) : ?>
			<!-- Mobile toggle -->
			<input id="main-menu-state" type="checkbox" />
			<label class="main-menu-btn" for="main-menu-state">
				<span class="main-menu-btn-icon"></span><span class="sr-only">Toggle main menu visibility</span>
			</label>
			<?php do_action( 'boldgrid_menu_main' ) ?>
		<?php endif; ?>
	</div>
	<?php do_action( 'boldgrid_header_bottom' ); ?>
</header><!-- #masthead -->
