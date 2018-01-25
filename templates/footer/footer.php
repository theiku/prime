<?php
/**
 * Footer Template
 *
 * This file contains the markup for the footer template.
 *
 * @since 2.0
 * @package Prime
 */

// Get the theme configs.
global $boldgrid_theme_framework;
$configs = $boldgrid_theme_framework->get_configs();
?>

<footer id="colophon" <?php bgtfw_footer_class( array( basename( __FILE__, '.php' ), $configs['template']['pages']['global']['footer'] ) ); ?> role="contentinfo" <?php BoldGrid_Framework_Schema::footer( true ); ?>>
	<?php do_action( 'boldgrid_footer_top' ); ?>
	<?php do_action( 'boldgrid_menu_social' ); ?>
	<?php do_action( 'boldgrid_menu_footer_center' ); ?>
	<?php do_action( 'boldgrid_display_attribution_links' ); ?>
	<?php do_action( 'boldgrid_display_contact_block' ); ?>
	<?php do_action( 'boldgrid_footer_bottom' ); ?>
</footer><!-- #colophon -->
