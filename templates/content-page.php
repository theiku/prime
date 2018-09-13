<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php do_action( 'before_entry_title' ); ?>
	<?php get_template_part( 'templates/entry-header-page' ); ?>
	<?php do_action( 'after_entry_title' ); ?>
	<div class ="article-wrapper">
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<nav class="page-links"><p>' . esc_html__( 'Pages:', 'bgtfw' ), 'after' => '</p></nav>' ) ); ?>
		</div><!-- .entry-content -->
		<footer class="entry-footer">
			<?php get_template_part( 'templates/entry-footer' ); ?>
		</footer><!-- .entry-footer -->
		<?php if ( comments_open() || get_comments_number() ) : ?>
			<?php comments_template( '/templates/comments.php' ); ?>
		<?php endif; ?>
	</div>
	<?php if ( BoldGrid::display_sidebar() && 'above' === get_theme_mod( 'bgtfw_global_title_position' ) ) : ?>
		<?php include BoldGrid::boldgrid_sidebar_path(); ?>
	<?php endif; ?>
</article><!-- #post-## -->
