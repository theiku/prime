<?php
/**
 * Archive Page Entry Header Template
 *
 * This file contains the markup for the archive page's
 * entry header.
 *
 * @package Prime
 */
?>
<div <?php BoldGrid::add_class( 'page_header_wrapper', [ 'page-header-wrapper', get_theme_mod( 'bgtfw_global_title_background_container' ) ] ); ?>>
	<header <?php BoldGrid::add_class( 'archive_page_title', [ 'page-header' ] ); ?>>
		<div <?php BoldGrid::add_class( 'featured_image', [ 'featured-imgage-header', get_theme_mod( 'bgtfw_global_title_content_container' ) ] ); ?>>
			<?php
				$queried_obj_id = get_queried_object_id();
				$archive_url = is_author() ? get_author_posts_url( $queried_obj_id ) : get_term_link( $queried_obj_id );
				printf(
					'<p class="page-title %1$s"><a %2$s href="%3$s" rel="bookmark">%4$s</a></p>',
					get_theme_mod( 'bgtfw_global_title_size' ),
					BoldGrid::add_class( 'pages_title', [ 'link' ], false ),
					esc_url( $archive_url ),
					get_the_archive_title()
				);
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</div>
	</header>
</div>
