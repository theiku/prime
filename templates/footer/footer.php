<?php
/**
 * Footer Template
 *
 * This file contains the markup for the footer template.
 *
 * @since 2.0
 * @package Prime
 */

?>
<footer id="colophon" <?php BoldGrid::add_class( 'footer', [ 'site-footer' ] ); ?> role="contentinfo" <?php BoldGrid_Framework_Schema::footer( true ); ?>>
	<?php do_action( 'boldgrid_footer_top' ); ?>
	<div <?php BoldGrid::add_class( 'footer_content', [ 'footer-content' ] ); ?>>
		<div <?php BoldGrid::add_class( 'social_menu_wrapper', [ 'social-menu-wrapper' ] ); ?>><?php do_action( 'boldgrid_menu_social' ); ?></div>
		<div <?php BoldGrid::add_class( 'footer_center_menu_wrapper', [ 'footer-center-menu-wrapper' ] ); ?>><?php do_action( 'boldgrid_menu_footer_center' ); ?></div>
		<div <?php BoldGrid::add_class( 'attribution_theme_mods_wrapper', [ 'attribution-theme-mods-wrapper' ] ); ?>><?php do_action( 'boldgrid_display_attribution_links' ); ?></div>
		<div <?php BoldGrid::add_class( 'contact_block_wrapper', [ 'contact-block-wrapper' ] ); ?>><?php do_action( 'boldgrid_display_contact_block' ); ?></div>
	</div>
	<?php do_action( 'boldgrid_footer_bottom' ); ?>
</footer><!-- #colophon -->
