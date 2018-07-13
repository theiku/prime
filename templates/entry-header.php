<header class="entry-header" <?php is_single() ? : bgtfw_featured_img_bg( $post->ID ); ?>>
	<div class="featured-imgage-header">
		<?php if ( is_single() || is_page() ) : ?>
			<?php the_title( '<p class="h1 entry-title page-title text-center">', '</p>' ); ?>
		<?php else : ?>
			<?php the_title( sprintf( '<p class="h1 entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?>
		<?php endif; ?>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php boldgrid_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</div>
</header><!-- .entry-header -->
