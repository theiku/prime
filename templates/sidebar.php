<?php
/**
 * The template for displaying the sidebar.
 *
 * @package BoldGrid
 */
// Link to the widgets section in the customizer.
$current_page = urlencode( get_site_url( null, wp_unslash( $_SERVER['REQUEST_URI'] ), null ) );
$link = esc_url(
			add_query_arg(
				array(
					'url' => $current_page,
					array(
						'autofocus' => array(
							'control' => 'sidebars_widgets[sidebar-1]'
						),
					),
					'return' => $current_page,
				),
				admin_url( 'customize.php' )
			)
		);

dynamic_sidebar( 'sidebar-1' ); ?>

<?php if ( current_user_can( 'edit_pages' ) && ! is_customize_preview() ) : ?>
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
