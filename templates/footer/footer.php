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

<footer id="colophon" <?php bgtfw_footer_class( array( basename( __FILE__, '.php' ), bgtfw_get_footer_container() ) ); ?> role="contentinfo" <?php BoldGrid_Framework_Schema::footer( true ); ?>>
	<?php do_action( 'boldgrid_footer_top' ); ?>
	<div class="social-menu-wrapper">
		<?php do_action( 'boldgrid_menu_social' ); ?>
	</div>
	<div class="footer-center-menu-wrapper">
		<?php do_action( 'boldgrid_menu_footer_center' ); ?>
	</div>
	<div class="attribution-theme-mods-wrapper">
		<?php do_action( 'boldgrid_display_attribution_links' ); ?>
	</div>
	<div class="contact-block-wrapper">
		<?php do_action( 'boldgrid_display_contact_block' ); ?>
	</div>
	<?php do_action( 'boldgrid_footer_bottom' ); ?>
</footer><!-- #colophon -->
