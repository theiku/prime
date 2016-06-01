<?php
/**
 * Default Page Template.
 *
 * This is the template responsible for displaying the
 * default page in the BoldGrid Theme.
 *
 * @since 2.0
 */

// Get the theme configs.
global $boldgrid_theme_framework;
$configs = $boldgrid_theme_framework->get_configs();

// Display the call to action widget area if configs are set.
$cta = $configs['template']['call-to-action'];
if ( $cta === 'all-pages' ) {
	get_template_part( 'templates/call-to-action' );
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php get_template_part( 'templates/entry-header', $configs['template']['entry-header'] ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<nav class="page-links"><p>' . esc_html__( 'Pages:', 'bgtfw' ), 'after' => '</p></nav>' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php get_template_part( 'templates/entry-footer', $configs['template']['entry-footer'] ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
