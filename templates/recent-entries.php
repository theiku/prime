<div class="row">
	<div class="col-md-6 search-posts">
		<h3><?php _e( 'Recent Articles' ); ?></h3>
		<ul class="list-group">
			<?php
				$args = array( 'numberposts' => '10', 'post_status' => 'publish' );
				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ) {
					if ( $recent['post_title'] ) {
						echo '<li class="list-group-item"><a href="' . get_permalink( $recent['ID'] ) . '">' . $recent['post_title'] . '</a></li>';
					}
				}
			?>
		</ul>
	</div> <!-- .search-posts -->
	<div class="col-md-6 search-pages">
		<h3><?php _e( 'Page Sitemap' ); ?></h3>
		<ul class="list-group">
		<?php $args = array( 'numberposts' => '10', 'sort_column' => 'menu_order' );
			$posts = get_pages( $args );
				foreach( $posts as $post ) {
					if ( $post->post_title ) {
						echo '<li class="list-group-item"><a href="' . get_permalink( $post->ID ) . '">' . $post->post_title . '</a></li>';
					}
				} ?>
		</ul>
	</div> <!-- .search-pages -->
</div> <!-- .row -->
