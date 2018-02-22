<?php
/**
 * Include the BoldGrid Theme Framework
 *
 * @package Prime
 */

locate_template( '/inc/boldgrid-theme-framework-config/config.php', true, true );
require_once get_template_directory() . '/inc/boldgrid-theme-framework/boldgrid-theme-framework.php';

// Load the BoldGrid Library
if ( ! class_exists( 'Boldgrid_Premium_Loader' ) ) {
	require_once get_template_directory() . '/inc/class-boldgrid-premium-loader.php';
}
new Boldgrid_Premium_Loader();

// Enable the ClaimPremiumKey notice.
add_filter( 'Boldgrid\Library\Library\Notice\ClaimPremiumKey_enable', '__return_true' );
