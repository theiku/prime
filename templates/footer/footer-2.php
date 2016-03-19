<footer id="colophon" class="site-footer" role="contentinfo" <?php BoldGrid_Framework_Schema::footer( true ); ?>>
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
</footer><!-- #colophon -->