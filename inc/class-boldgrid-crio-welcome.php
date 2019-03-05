<?php
/**
 * Class: Boldgrid_Crio_Welcome
 *
 * @since      x.x.x
 * @package    Boldgrid_Crio
 * @subpackage Boldgrid_Crio_Welcome
 * @author     BoldGrid <support@boldgrid.com>
 * @link       https://boldgrid.com
 */

// If this file is called directly, abort.
defined( 'WPINC' ) ? : die;

/**
 * Boldgrid_Crio_Welcome Class
 *
 * @since x.x.x
 */
class Boldgrid_Crio_Welcome {

	/**
	 * Menu slug for welcome page.
	 *
	 * @since  x.x.x
	 * @access protected
	 * @var    string
	 */
	protected $menu_slug = 'crio-welcome';

	/**
	 * Starter Content Slug
	 *
	 * For example, the "crio-starter-content" in admin.php?page=crio-starter-content.
	 *
	 * @since  x.x.x
	 * @access protected
	 * @var    string
	 */
	protected $starter_content_slug = 'crio-starter-content';

	/**
	 * Starter Content URL.
	 *
	 * @since  x.x.x
	 * @access protected
	 * @var    string
	 */
	protected $starter_content_url;

	/**
	 * URL to the welcome page.
	 *
	 * @since  x.x.x
	 * @access protected
	 * @var    string
	 */
	protected $welcome_url = '';

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since x.x.x
	 */
	public function __construct() {
		$this->starter_content_url = admin_url( 'admin.php?page=' . $this->starter_content_slug );
		$this->welcome_url = admin_url( 'admin.php?page=' . $this->menu_slug );
	}

	/**
	 * Add hooks.
	 *
	 * @since x.x.x
	 */
	public function add_hooks() {
		add_action( 'admin_init', array( $this, 'redirect_on_activation' ) );
		add_action( 'admin_menu', array( $this, 'add_admin_menu' ) );
		add_filter( 'boldgrid_theme_framework_config', array( $this, 'prime_framework_config' ) );

		/*
		 * By default, the bgtfw adds the TGMPA "Recommended Plugins" page as a sub menu item of
		 * Plugins. Change this so it becomes a sub menu item of "BoldGrid Crio".
		 */
		add_filter( 'bgtfw_register_tgmpa_configs', function( $configs ) {
			$configs['parent_slug'] = $this->menu_slug;
			return $configs;
		} );

		// Don't show the key prompt notice on the welcome page.
		if ( Boldgrid_Crio_Welcome::is_welcome_page() ) {
			add_filter( 'Boldgrid\Library\Library\Notice\KeyPrompt_display', '__return_false' );
		}
	}

	/**
	 * Redirect to Welcome page after theme is activated.
	 *
	 * @since x.x.x
	 */
	public function redirect_on_activation() {
		global $pagenow;

		if ( 'themes.php' === $pagenow && is_admin() && isset( $_GET['activated'] ) ) {
			wp_safe_redirect( admin_url( 'admin.php?page=' . $this->menu_slug ) );
			exit();
		}
	}

	/**
	 * Add menu items.
	 *
	 * @since x.x.x
	 */
	public function add_admin_menu() {

		// URL to the customizer.
		$customize_url = add_query_arg(
			'return',
			urlencode( wp_unslash( $_SERVER['REQUEST_URI'] ) ),
			admin_url( 'customize.php' )
		);

		add_theme_page(
			__( 'Crio', 'bgtfw' ),
			__( 'Crio', 'bgtfw' ),
			'manage_options',
			$this->menu_slug,
			array( $this, 'page_welcome' ),
			'none',
			2
		);
	}

	/**
	 * Whether or not we are on the welcome page.
	 *
	 * @since x.x.x
	 *
	 * @global string $pagenow
	 *
	 * @return bool
	 */
	public static function is_welcome_page() {
		global $pagenow;

		$page = empty( $_GET['page'] ) ? null : $_GET['page'];

		return 'admin.php' === $pagenow && 'crio-welcome' === $page;
	}

	/**
	 * Connect Page Scripts.
	 *
	 * Hook into library's Boldgrid\Library\Library\Page\Connect\addScripts action and add js / css.
	 *
	 * @since 2.0.0
	 */
	public function connect_scripts() {

		// Set BoldGrid Crio > Registration as active menu item.
		wp_enqueue_script(
			'crio-welcome',
			get_template_directory_uri() . '/js/welcome.js',
			array( 'jquery' )
		);

		/*
		 * Hide notices on the Dashboard > BoldGrid Crio > Registration page. The user's primary
		 * goal on this page is to enter their key, and we do not want to distract them with other
		 * notices such as TGMPA notices.
		 */
		$css = '.wrap .notice {display: none;}';
		wp_add_inline_style( 'bglib-api-notice-css', $css );
	}

	/**
	 * Display Welcome page.
	 *
	 * @since x.x.x
	 */
	public function page_welcome() {
		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		// Enqueue style used for Welcome Panel on the Dashboard.
		wp_enqueue_style(
			'wp-dashboard',
			admin_url( 'css/dashboard' . $suffix . '.css' )
		);

		wp_enqueue_style(
			'prime-welcome',
			get_template_directory_uri() . '/css/welcome.css'
		);

		do_action( 'bgtfw_enqueue_starter_content_plugins' );

		$theme = wp_get_theme();

		include get_template_directory() . '/inc/partials/welcome.php';
	}

	/**
	 * Filter the bgtfw configs.
	 *
	 * @since x.x.x
	 *
	 * @param  array $config Bgtfw config.
	 * @return array
	 */
	public function prime_framework_config( $config ) {
		$config['starter-content-installer']['return_to_dashboard'] = $this->welcome_url;
		$config['starter-content-suggest']['dashboard_url'] = $this->starter_content_url;

		return $config;
	}
}
