<?php
/**
 *
 * @package BoldGrid
 */

// Get the theme configs.
global $boldgrid_theme_framework;
$configs = $boldgrid_theme_framework->get_configs();
?>

<header id="masthead" class="site-header" role="banner" <?php BoldGrid_Framework_Schema::header( true ); ?>>
	<?php BoldGrid::skip_link(  ); ?>
	<?php do_action( 'boldgrid_menu_secondary' ); ?>
	<div class="container">
		<?php do_action( 'boldgrid_header_top' ); ?>
		<?php dynamic_sidebar( 'boldgrid-widget-2' ); ?>
		<div class="row">
			<div class="col-md-12">
				<div class="site-branding">
					<?php do_action( 'boldgrid_site_title' ); ?>
					<?php do_action( 'boldgrid_print_tagline' ); ?>
				</div>
			</div>
		</div>
		<div class"row">
			<div class="col-md-12">
				<?php do_action( 'boldgrid_menu_social' ); ?>
			</div>
		</div>
	</div><!-- .container -->
	<nav id="site-navigation" class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div><!-- .navbar-header -->
			<div class="navbar-collapse collapse" id="primary-navbar">
				<?php do_action( 'boldgrid_menu_primary' ); ?>
				<?php if ( true === $configs['template']['navbar-search-form'] ) : ?>
					<?php get_template_part( 'templates/header/search' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</nav><!-- #site-navigation -->
	<?php do_action( 'boldgrid_menu_tertiary' ); ?>
	<?php do_action( 'boldgrid_header_bottom' ); ?>
</header><!-- #masthead -->