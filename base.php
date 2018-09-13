<?php
/**
 * Base Template
 *
 * This file contains the base structure of a BoldGrid Theme.
 *
 * @since 2.0
 * @package Prime
 */

global $boldgrid_theme_framework;
$configs = $boldgrid_theme_framework->get_configs();
?>
<!doctype html>
<!-- BoldGrid Theme Framework Version: <?php echo esc_html( $configs['framework-version'] ); ?> -->
<html <?php language_attributes(); ?>>
	<?php get_template_part( 'templates/head' ); ?>
	<body <?php body_class(); ?>>
		<?php do_action( 'boldgrid_header_before' ); ?>
		<div <?php BoldGrid::add_class( 'site_header', [ 'site-header' ] ); ?>>
			<?php do_action( 'get_header' ); ?>
			<?php get_template_part( 'templates/header/header', $configs['template']['header'] ); ?>
		</div><!-- /.header -->
		<?php do_action( 'boldgrid_header_after' ); ?>
		<?php do_action( 'boldgrid_content_before' ); ?>
		<div id="content" <?php BoldGrid::add_class( 'site_content', [ 'site-content' ] ); ?> role="document">
			<main <?php BoldGrid::add_class( 'main', [ 'main' ] ); ?>>
				<?php do_action( 'boldgrid_main_top' ); ?>
				<?php include Boldgrid_Framework_Wrapper::boldgrid_template_path(); ?>
				<?php do_action( 'boldgrid_main_bottom' ); ?>
			</main><!-- /.main -->
			<?php if ( BoldGrid::display_sidebar() && 'above' !== get_theme_mod( 'bgtfw_global_title_position' ) ) : ?>
				<?php include BoldGrid::boldgrid_sidebar_path(); ?>
			<?php endif; ?>
		</div><!-- /.content -->
		<?php do_action( 'boldgrid_content_after' ); ?>
		<?php do_action( 'boldgrid_footer_before' ); ?>
		<?php do_action( 'get_footer' ); ?>
		<?php get_template_part( 'templates/footer/footer', $configs['template']['footer'] ); ?>
		<?php wp_footer(); ?>
		<?php do_action( 'boldgrid_footer_after' ); ?>
	</body>
</html>
