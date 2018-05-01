<?php
/**
 * Entry Header Template
 *
 * This file contains the markup for the default entry header.
 *
 * @package Prime
 */

// @todo TMP CODE.
if( ! class_exists( 'BoldGrid_Framework_Title' ) ) {
	include_once( ABSPATH . BGTFW_PATH . '/includes/class-boldgrid-framework-title.php' );
}

?>

<?php if ( is_page() || is_single() ) :
	if ( BoldGrid_Framework_Title::to_show() ) : ?>
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	<?php endif; ?>
<?php else : ?>
	<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
<?php endif; ?>
