<?php
/**
 * Home Page Template.
 *
 * This is the template responsible for displaying the
 * home page in the BoldGrid Theme.
 *
 * @since 2.0
 */

global $boldgrid_theme_framework;
$configs = $boldgrid_theme_framework->get_configs();
$cta = $configs['template']['call-to-action'];

/**
 * Display the call to action widget area if configs are set.
 */
if ( $cta === 'all-pages' || $cta === 'home-only' ) {
	get_template_part( 'templates/call-to-action' );
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array(
			'before' => '<nav class="page-links"><p>' . esc_html__( 'Pages:', 'bgtfw' ),
			'after'  => '</p></nav>',
			)
		); ?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<div class='container'>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'bgtfw' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<i class="fa fa-pencil">',
				'</i>'
			);
		?>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
