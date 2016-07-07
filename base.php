<?php
/**
 * Base Template
 *
 * This file contains the base structure of a BoldGrid Theme.
 *
 * @since 2.0
 */

global $boldgrid_theme_framework;
$configs = $boldgrid_theme_framework->get_configs();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<?php get_template_part( 'templates/head' ); ?>
	<body <?php body_class(); ?>>
		<?php do_action( 'boldgrid_header_before' ); ?>
		<div class="site-header">
			<?php do_action( 'get_header' ); ?>
			<?php get_template_part( 'templates/header/header', $configs['template']['header'] ); ?>
		</div><!-- /.header -->
		<?php do_action( 'boldgrid_header_after' ); ?>
		<?php do_action( 'boldgrid_content_before' ); ?>
		<div class="site-content" role="document">
			<main class="main container">
				<?php include Boldgrid_Framework_Wrapper::boldgrid_template_path(); ?>
			</main><!-- /.main -->
		</div><!-- /.content -->
		<?php do_action( 'boldgrid_content_after' ); ?>
		<?php do_action( 'boldgrid_footer_before' ); ?>
		<div class="site-footer">
			<?php do_action( 'get_footer' ); ?>
			<?php get_template_part( 'templates/footer/footer', $configs['template']['footer'] ); ?>
			<?php wp_footer(); ?>
		</div>
		<?php do_action( 'boldgrid_footer_after' ); ?>
	</body>
</html>
