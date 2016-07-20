<?php
// Get the theme configs.
global $boldgrid_theme_framework;
$configs = $boldgrid_theme_framework->get_configs();

// Display the call to action widget area if configs are set.
?>
<div class="bgtfw-cta <?php echo $configs['template']['pages']['global']['call-to-action']; ?>">
	<?php dynamic_sidebar( 'boldgrid-widget-1' );?>
</div>
