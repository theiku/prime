<header id="masthead" class="site-header <?php echo esc_attr( basename(__FILE__, '.php' ) ); ?>" role="banner" <?php BoldGrid_Framework_Schema::header( true ); ?>>
<?php BoldGrid::skip_link(  ); ?>
	<div class="container">
		<div class="col-md-12">
			<div class="alignright"><?php do_action( 'boldgrid_menu_tertiary' ); ?></div>
		</div><!-- .col -->
		<div class="col-md-12">
			<?php do_action( 'boldgrid_menu_secondary' ); ?>
		</div><!-- .col -->
		<?php do_action( 'boldgrid_header_top' ); ?>
		<div class="site-branding">
			<?php do_action( 'boldgrid_site_title' ); ?>
			<?php do_action( 'boldgrid_print_tagline' ); ?>
		</div><!-- .site-branding -->
		<nav id="site-navigation" class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div><!-- .navbar-header -->
			<?php do_action('boldgrid_menu_primary'); ?>
		</nav><!-- #site-navigation -->
		<?php do_action( 'boldgrid_header_bottom' ); ?>
		<div class="row call-to-action-wrapper">
			<div class="col-md-12">
				<?php dynamic_sidebar( 'boldgrid-widget-2' ); ?>
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</header><!-- #masthead -->
