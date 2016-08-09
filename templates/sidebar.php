<?php
/**
 * The template for displaying the sidebar.
 *
 * @package BoldGrid
 */

dynamic_sidebar( 'sidebar-1' ); ?>
<?php if ( ! is_active_sidebar( 'sidebar-1' ) && current_user_can ( 'edit_pages' ) ) : ?>
	<div class="empty-sidebar-message">
		<h2>Empty Sidebar</h2>
		<p>This sidebar doesn't have any widgets assigned to it.  <a href="">Add widgets here.</a></p>
	</div>
<?php endif;
