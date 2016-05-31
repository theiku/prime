<?php
// Get the theme configs.
global $boldgrid_theme_framework;
$configs = $boldgrid_theme_framework->get_configs();
?>

<header id="masthead" class="<?php echo basename(__FILE__, '.php'); ?>" role="banner" <?php BoldGrid_Framework_Schema::header( true ); ?>>
	<?php do_action( 'boldgrid_header_top' ); ?>
		<div class='boldgrid-section'>
			<?php do_action( 'boldgrid-theme-location', 'header', '12' ); ?>
		</div>
		<div class='boldgrid-section'>
			<div class="container">
				<div class='row'>
					<div class='col-md-12'><?php do_action( 'boldgrid-theme-location', 'header', '1' ); ?></div>
				</div>
				<div class='row'>
					<div class='col-md-4'><?php do_action( 'boldgrid-theme-location', 'header', '2' ); ?></div>
					<div class='col-md-4'><?php do_action( 'boldgrid-theme-location', 'header', '3' ); ?></div>
					<div class='col-md-4'><?php do_action( 'boldgrid-theme-location', 'header', '4' ); ?></div>
				</div>
				<div class='row'>
					<div class='col-md-9'><?php do_action( 'boldgrid-theme-location', 'header', '14' ); ?></div>
					<div class='col-md-3'><?php do_action( 'boldgrid-theme-location', 'header', '15' ); ?></div>
				</div>
				<div class='row'>
					<div class='col-md-12'><?php do_action( 'boldgrid-theme-location', 'header', '5' ); ?></div>
				</div>
				<div class='row'>
					<div class='col-md-6'><?php do_action( 'boldgrid-theme-location', 'header', '6' ); ?></div>
					<div class='col-md-6'><?php do_action( 'boldgrid-theme-location', 'header', '7' ); ?></div>
				</div>
				<div class='row'>
					<div class='col-md-12'><?php do_action( 'boldgrid-theme-location', 'header', '8' ); ?></div>
				</div>
				<div class='row'>
					<div class='col-md-6'><?php do_action( 'boldgrid-theme-location', 'header', '9' ); ?></div>
					<div class='col-md-6'><?php do_action( 'boldgrid-theme-location', 'header', '10' ); ?></div>
				</div>
				<div class='row'>
					<div class='col-md-12'><?php do_action( 'boldgrid-theme-location', 'header', '11' ); ?></div>
				</div>
			</div><!-- .container -->
		</div><!-- .section -->
		<div class='boldgrid-section'>
			<?php do_action( 'boldgrid-theme-location', 'header', '13' ); ?>
		</div>
	<?php do_action( 'boldgrid_header_bottom' ); ?>
</header><!-- #masthead -->
