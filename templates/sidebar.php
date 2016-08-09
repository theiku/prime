<?php
/**
 * The template for displaying the sidebar.
 *
 * @package BoldGrid
 */
// Link to the widgets section in the customizer.
$link = esc_url( add_query_arg( array( array( 'autofocus' => array( 'panel' => 'widgets' ) ), 'return' => urlencode( wp_unslash( $_SERVER['REQUEST_URI'] ) ), ), admin_url( 'customize.php' ) ) );

dynamic_sidebar( 'sidebar-1' ); ?>

<?php if ( current_user_can ( 'edit_pages' ) ) : ?>
	<?php if ( ! is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div class="empty-sidebar-message">
			<h2>Empty Sidebar</h2>
			<p>This sidebar doesn't have any widgets assigned to it yet.</p>
			<p><a href="<?php echo $link ?>"><i class="fa fa-plus-square" aria-hidden="true"></i> Add widgets here.</a></p>
		</div>
		<?php elseif ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div class="add-widget-message">
				<p><a href="<?php echo $link ?>"><i class="fa fa-plus-square" aria-hidden="true"></i> Add another widget.</a></p>
			</div>
	<?php endif; ?>
<?php endif; ?>
