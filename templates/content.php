<?php
/**
 * Content Template
 *
 * This file contains the markup for the default content template.
 *
 * @package Prime
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" <?php bgtfw_featured_img_bg( $post->ID ); ?>>
		<div class="featured-imgage-header">
			<?php get_template_part( 'templates/entry-header' ); ?>
			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php boldgrid_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</div>
	</header><!-- .entry-header -->
	<div class="entry-content">
	<?php
		/* translators: %s: Name of current post */
		$content = get_theme_mod( 'bgtfw_pages_blog_blog_page_layout_content', 'excerpt' );
		if ( $content === 'excerpt' ) {
			the_excerpt();
		} else {
			if ( get_theme_mod( 'bgtfw_pages_blog_blog_page_layout_featimg', false ) && has_post_thumbnail() ) : ?>
				<div class="featured-image container">
					<?php the_post_thumbnail(); ?>
				</div>
			<?php endif; ?>
			<?php the_content( sprintf( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'boldgrid' ), the_title( '<span class="screen-reader-text">"', '"</span>', false ) ) );
		}
	?>
	<?php wp_link_pages( array(
		'before' => '<div class="page-links">' . __( 'Pages:', 'bgtfw' ),
		'after'  => '</div>',
		)
	); ?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php boldgrid_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
