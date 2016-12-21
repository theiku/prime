<?php
/**
 * Footer Template 2
 *
 * This file contains the markup for footer template #2.
 *
 * @since 2.0
 * @package Prime
 */
?>

<footer id="colophon" role="contentinfo" <?php BoldGrid_Framework_Schema::footer( true ); ?>>
	<div class="container">
		<?php do_action( 'boldgrid_footer_top' ); ?>
		<div class="row">
			<div class="col-md-6">
				<?php do_action( 'boldgrid_menu_footer_center' ); ?>
			</div>
			<div class="col-md-6">
				<?php do_action( 'boldgrid_display_attribution_links' ); ?>
			</div><!-- .attribution .col -->
		</div><!-- .row -->
		<?php do_action( 'boldgrid_footer_bottom' ); ?>
	</div>
</footer><!-- #colophon -->
find . \( ! -path "*/scssphp/*" ! -path "*/black-studio-tinymce-widget/*" ! -path "*/kirki/*" -name '*.php' \) -exec php -lf {} \;
