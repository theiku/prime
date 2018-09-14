<?php
/**
 * Prime Configuration File.
 *
 * This file contains the configuration options used in the Prime theme.
 *
 * @package Prime
 */

if ( ! function_exists( 'boldgrid_prime_framework_config' ) ) {
	/**
	 * Boldgrid Theme Framework Configs
	 *
	 * Filters the theme framework configurations.
	 *
	 * @since 1.0.0
	 */
	function boldgrid_prime_framework_config( $config ) {

		// New.
		$config['customizer']['controls']['bgtfw_pages_container']['default'] = '';

		// Menu.
		$config['customizer']['controls']['bgtfw_menu_margin_main']['default'] = [
			[
				'media' => [ 'base' ],
				'unit' => 'px',
				'isLinked' => false,
				'values' => [
					'bottom' => 20,
				],
			],
		];

		$config['customizer']['controls']['bgtfw_header_border']['default'] = [
			[
				'media' => [ 'base' ],
				'unit' => 'px',
				'isLinked' => false,
				'type' => 'solid',
				'values' => [
					'top' => 0,
					'left' => 0,
					'right' => 0,
					'bottom' => 5
				],
			],
		];
		$config['customizer']['controls']['bgtfw_header_border_color']['default'] = 'color-3';

		$config['customizer']['controls']['bgtfw_menu_items_active_link_color_main']['default'] = 'color-1';
		$config['customizer']['controls']['bgtfw_menu_items_link_color_main']['default'] = 'color-2';
		$config['customizer']['controls']['bgtfw_menu_items_hover_color_main']['default'] = 'color-1';
		$config['customizer']['controls']['bgtfw_menu_items_hover_effect_main']['default'] = 'hvr-underline-from-center';
		// End New.

		// Disable old typography controls in favor of new ones.
		$config['customizer-options']['typography']['controls']['main_text'] = false;
		$config['customizer-options']['typography']['controls']['subheadings'] = false;
		$config['customizer-options']['site-title']['site-title'] = false;

		// Waiting for all themes to opt in before removing switch.
		// Enable typography controls in the customizer.
		$config['customizer-options']['typography']['enabled'] = true;

		// Enable Sticky Footer.
		$config['scripts']['boldgrid-sticky-footer'] = true;

		// Waiting for all themes to opt in before removing switch.
		// Remove the wrong attribution links from the footer.
		$config['temp']['attribution_links'] = true;

		// Waiting for all themes to opt in before removing switch.
		// Turn on the parent theme template engine.
		$config['boldgrid-parent-theme'] = true;

		// Set Theme Name.
		$config['theme_name'] = 'prime';

		// This theme doesn't support a background image.
		$config['customizer-options']['background']['defaults']['background_image'] = false;

		// Disable Call to Action Widget.
		$config['template']['call-to-action'] = 'disabled';

		// Default Colors.
		$config['customizer-options']['colors']['defaults'] = array(
			array(
				'default' => true,
				'format' => 'palette-primary',
				'neutral-color' => '#ffffff',
				'colors' => array(
					'#f95b26',
					'#212121',
					'#eaebed',
					'#f6f6f6',
					'#1a1a1a',
				),
			),
			array(
				'format' => 'palette-primary',
				'neutral-color' => '#ededed',
				'colors' => array(
					'#ff2626',
					'#515151',
					'#ffffff',
					'#e2e2e2',
					'#515151',
				),
			),
			array(
				'format' => 'palette-primary',
				'neutral-color' => '#f3fafe',
				'colors' => array(
					'#4392f1',
					'#342e37',
					'#f1f0f0',
					'#ffffff',
					'#342e37',
				),
			),
			array(
				'format' => 'palette-primary',
				'neutral-color' => '#f7e2da',
				'colors' => array(
					'#f15152',
					'#3a2e39',
					'#ffffff',
					'#f7f4ea',
					'#3a2e39',
				),
			),
			array(
				'format' => 'palette-primary',
				'neutral-color' => '#ffffff',
				'colors' => array(
					'#17a398',
					'#33312e',
					'#e1ebed',
					'#f6f7f7',
					'#33312e',
				),
			),
		);

		// Create the custom image attachments used as post thumbnails for pages.
		$config['starter-content']['attachments'] = array(

			// Pages.
			'contact-featured' => array(
				'post_title' => _x( 'Contact', 'Theme starter content', 'boldgrid-prime' ),
				'file' => 'starter-content/corporate/contact/featured.jpg',
			),
			'about-featured' => array(
				'post_title' => _x( 'About Us', 'Theme starter content', 'boldgrid-prime' ),
				'file' => 'starter-content/corporate/about/featured.jpg',
			),

			// Blog Posts.
			'blogging-101' => array(
				'post_title' => _x( 'Blogging 101', 'Theme starter content', 'boldgrid-prime' ),
				'file' => 'starter-content/corporate/blog/blogging-101.png',
			),
			'basic-taxonomies' => array(
				'post_title' => _x( 'Basic Taxonomies', 'Theme starter content', 'boldgrid-prime' ),
				'file' => 'starter-content/corporate/blog/basic-taxonomies.png',
			),
			'writing-tips' => array(
				'post_title' => _x( 'Tips Better Writing', 'Theme starter content', 'boldgrid-prime' ),
				'file' => 'starter-content/corporate/blog/writing-tips.png',
			),
			'wordcamp-101' => array(
				'post_title' => _x( 'WordCamp 101', 'Theme starter content', 'boldgrid-prime' ),
				'file' => 'starter-content/corporate/blog/wordcamp-101.png',
			),
		);

		$config['starter-content']['plugins'] = array(
			array(
				'name'      => 'BoldGrid Post and Page Builder',
				'slug'      => 'post-and-page-builder',

				// Temp. install release candidate.
				'source'    => 'https://downloads.wordpress.org/plugin/post-and-page-builder-1.8.0-rc.1.zip',

				'required'  => true,
			),
			array(
				'name'      => 'BoldGrid Post and Page Builder Premium',
				'slug'      => 'post-and-page-builder-premium',
				'source'    => 'https://repo.boldgrid.com/post-and-page-builder-premium.zip',
				'required'  => true,
			),
			array(
				'name'      => 'WPForms',
				'slug'      => 'wpforms-lite',
				'required'  => true,
			),
		);

		// Post activate actions.
		$config['starter-content']['plugins_post_activate'] = array(
			// Prevent the "exit" and redirect to "WPForms Welcome Page" after activation.
			'delete_transient' => 'wpforms_activation_redirect',
		);

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		$config['starter-content']['posts'] = array(

			// Pages.
			'homepage' => array(
				'post_type' => 'page',
				'post_title' => 'Home',
				'post_content' => bgtfw_get_contents( '/corporate/home/content.php' ),
				'meta_input' => array(
					'boldgrid_hide_page_title' => '0',
				),
			),
			'about' => array(
				'post_type' => 'page',
				'post_title' => 'About Us',
				'thumbnail' => '{{about-featured}}',
				'post_content' => bgtfw_get_contents( '/corporate/about/content.php' ),
			),
			'menu' => array(
				'post_type' => 'page',
				'post_title' => 'Services',
				'post_content' => bgtfw_get_contents( '/corporate/services/content.php' ),
			),
			'contact' => array(
				'post_type' => 'page',
				'post_title' => 'Contact Us',
				'thumbnail' => '{{contact-featured}}',
				'post_content' => bgtfw_get_contents( '/corporate/contact/content.php' ),
			),

			// Posts.
			'bloging-101' => array(
				'post_type' => 'post',
				'post_title' => 'Blogging 101',
				'thumbnail' => '{{blogging-101}}',
				'post_content' => bgtfw_get_contents( '/corporate/blog/blogging-101.php' ),
			),
			'basic-taxonomies' => array(
				'post_type' => 'post',
				'post_title' => 'Basic Taxonomies',
				'thumbnail' => '{{basic-taxonomies}}',
				'post_content' => bgtfw_get_contents( '/corporate/blog/basic-taxonomies.php' ),
			),
			'tips-for-writing' => array(
				'post_type' => 'post',
				'post_title' => 'Tips For Better Writing',
				'thumbnail' => '{{writing-tips}}',
				'post_content' => bgtfw_get_contents( '/corporate/blog/writing-tips.php' ),
			),
			'wordcamp-101' => array(
				'post_type' => 'post',
				'post_title' => 'WordCamp 101',
				'thumbnail' => '{{wordcamp-101}}',
				'post_content' => bgtfw_get_contents( '/corporate/blog/wordcamp-101.php' ),
			),
			'blog' => array(
				'post_type' => 'page',
				'post_title' => 'Blog',
			),
		);

		// Default to a static front page and assign the front and posts pages.
		$config['starter-content']['options'] = array(
			'show_on_front' => 'page',
			'page_on_front' => '{{homepage}}',
			'page_for_posts' => '{{blog}}',
		);

		// Primary background color.
		$config['customizer']['controls']['boldgrid_background_color']['default'] = 'color-neutral';

		// Primary headings color.
		$config['customizer']['controls']['bgtfw_headings_color']['default'] = 'color-2';

		// Primary color for site's title.
		$config['customizer']['controls']['bgtfw_site_title_color']['default'] = 'color-2';

		// Primary color for site's tagline.
		$config['customizer']['controls']['bgtfw_tagline_color']['default'] = 'color-2';

		// Header specific colors for background, headings, and links.
		$config['customizer']['controls']['bgtfw_header_color']['default'] = 'color-neutral';

		// Footer specific colors for background, headings, and links.
		$config['customizer']['controls']['bgtfw_footer_color']['default'] = 'color-5';
		$config['customizer']['controls']['bgtfw_footer_links']['default'] = 'color-1';

		// Page title display settings, show by default.
		$config['customizer']['controls']['bgtfw_pages_title_display']['default'] = 'show';
		$config['customizer']['controls']['bgtfw_posts_title_display']['default'] = 'show';

		// Default header position is on top.
		$config['customizer']['controls']['bgtfw_header_layout_position']['default'] = 'header-top';

		// Default header is a fixed header.
		$config['customizer']['controls']['bgtfw_fixed_header']['default'] = true;

		// Default header layout will be layout-4.
		$config['customizer']['controls']['bgtfw_header_top_layouts']['default'] = 'layout-4';

		// Default header will be in container.
		$config['customizer']['controls']['header_container']['default'] = 'container';

		// Default footer will be in container.
		$config['customizer']['controls']['footer_container']['default'] = 'container';

		// Default footer layout will be layout-7.
		$config['customizer']['controls']['bgtfw_footer_layouts']['default'] = 'layout-3';

		// Set the page title position.
		$config['customizer']['controls']['bgtfw_global_title_position']['default'] = 'above';

		// Display page title background in full width container.
		$config['customizer']['controls']['bgtfw_global_title_background_container']['default'] = 'full-width';

		// Display the page title content inside of a container.
		$config['customizer']['controls']['bgtfw_global_title_content_container']['default'] = 'container';

		// Set background color of page title containers.
		$config['customizer']['controls']['bgtfw_global_title_background_color']['default'] = 'color-2';

		// Set the default global page title color.
		$config['customizer']['controls']['bgtfw_global_title_color']['default'] = 'color-4';

		// Set the text alignment of the page titles globally.
		$config['customizer']['controls']['bgtfw_global_title_alignment']['default'] = 'left';

		// Set the headings size of the page titles globally.
		$config['customizer']['controls']['bgtfw_global_title_size']['default'] = 'h2';

		// Show blog and archives in a 1 column layout.
		$config['customizer']['controls']['bgtfw_pages_blog_blog_page_layout_columns']['default'] = '1';

		// Set the blog/archive pages sidebar display (Homepage > Displays Latest Posts).
		$config['customizer']['controls']['bgtfw_blog_blog_page_sidebar']['default'] = 'right-sidebar';

		// Set the blog/archive pages sidebar display (Design > Blog > Blog Page > Sidebar).
		$config['customizer']['controls']['bgtfw_blog_blog_page_sidebar2']['default'] = 'right-sidebar';

		// Set the primary sidebar background color.
		$config['customizer']['controls']['sidebar_meta']['primary-sidebar']['background_color'] = 'color-neutral';

		// Set the primary sidebar links color.
		$config['customizer']['controls']['sidebar_meta']['primary-sidebar']['links_color'] = 'color-1';

		// Set the primary sidebar headings color.
		$config['customizer']['controls']['sidebar_meta']['primary-sidebar']['headings_color'] = 'color-2';

		// Register primary sidebar widgets..
		$config['starter-content']['widgets']['primary-sidebar'] = array(
			// Widget ID
			'custom_html' => array(

				// Widget $id -> set when creating a Widget Class
				'custom_html',

				// Widget $instance -> settings
				array(
					'title' => 'About ' . get_bloginfo( 'name' ),
					'content' => '<hr class="bg-hr color1-color bg-hr-15" style="width: 10%; margin-left: 0px; margin-right: auto; margin-top: 0px;"><div class="about-us-image text-center" style="padding-bottom: 1em;"><img class="bg-box-shadow-bottom-right bg-box-cover" src="https://randomuser.me/api/portraits/women/' . rand( 1, 50 ) . '.jpg"></div><p>' . get_bloginfo( 'name' ) . ' is taking brand ambassadors but re-target key demographics.  Amplifying cloud. </p>',
				),
			),
			'search',
			'category',
			'recent-posts',
		);

		// Show excerpts instead of full blog post on blog and archives.
		$config['customizer']['controls']['bgtfw_pages_blog_blog_page_layout_content']['default'] = 'excerpt';

		// Set the blog excerpt length.
		$config['customizer']['controls']['bgtfw_pages_blog_blog_page_layout_excerpt_length']['default'] = 30;

		// Display option for featured images on blog/archive lists.
		$config['customizer']['controls']['bgtfw_blog_post_header_feat_image_display']['default'] = 'show';

		// Featured image in post list position.
		$config['customizer']['controls']['bgtfw_blog_post_header_feat_image_position']['default'] = 'above';

		// Set post list's featured image height.
		$config['customizer']['controls']['bgtfw_blog_post_header_feat_image_height']['default'] = 20;

		// Set post list's featured image width.
		$config['customizer']['controls']['bgtfw_blog_post_header_feat_image_width']['default'] = 100;

		// Post list title color.
		$config['customizer']['controls']['bgtfw_blog_post_header_title_color']['default'] = 'color-2';

		// Post list read more link text.
		$config['customizer']['controls']['bgtfw_blog_post_readmore_text']['default'] = esc_html__( 'Read More', 'bgtfw' );

		// Post list read more link style.
		$config['customizer']['controls']['bgtfw_blog_post_readmore_type']['default'] = 'btn button-primary';

		// Post list read more link alignment.
		$config['customizer']['controls']['bgtfw_blog_post_readmore_position']['default'] = 'left';

		// Post list tag links display.
		$config['customizer']['controls']['bgtfw_blog_post_tags_display']['default'] = 'none';

		// Post list category links display.
		$config['customizer']['controls']['bgtfw_blog_post_cats_display']['default'] = 'none';

		// Post list comment links display.
		$config['customizer']['controls']['bgtfw_blog_post_comments_display']['default'] = 'none';

		// Pages will not show a sidebar by default.
		$config['customizer']['controls']['bgtfw_layout_page']['default'] = 'no-sidebar';

		// Site's title typography defaults.
		$config['customizer']['controls']['bgtfw_site_title_typography']['default'] = array(
			'font-family' => 'Playfair Display',
			'font-size' => '38px',
			'text-transform' => 'capitalize',
			'line-height' => '1.1',
			'text-align' => 'center',
			'variant' => 'regular'
		);

		// Site's tagline typography defaults.
		$config['customizer']['controls']['bgtfw_tagline_typography']['default'] = array(
			'font-family' => 'Lato',
			'font-size' => '20px',
			'text-transform' => 'lowercase',
			'line-height' => '1.1',
			'text-align' => 'center',
			'variant' => '300italic'
		);

		// Site's body typography defaults.
		$config['customizer']['controls']['bgtfw_body_typography']['default'] = array(
			'font-family' => 'Lato',
			'font-size' => '17px',
			'line-height' => '1.4',
			'text-transform' => 'none',
			'variant' => 'regular'
		);

		// Site's headings typography defaults.
		$config['customizer']['controls']['bgtfw_menu_typography_main']['default'] = array(
			'font-family' => 'Playfair Display',
			'font-size' => '16px',
			'line-height' => '1.5',
			'text-transform' => 'none',
			'variant' => 'regular'
		);


		$config['customizer']['controls']['bgtfw_headings_font_size']['default'] = '18';
		$config['customizer']['controls']['bgtfw_headings_typography']['default'] = array(
			'font-family' => 'Playfair Display',
			'line-height' => '1.5',
			'text-transform' => 'none',
			'variant' => 'regular'
		);


		if ( ! class_exists( 'Boldgrid_Editor' ) ) {
			$config['scripts']['animate-css'] = true;
			$config['scripts']['wow-js'] = true;
		}

		// Main Menu configuration.
		$config['starter-content']['nav_menus']['main'] = array(
			'name' => __( 'Main Menu', 'bgtfw' ),
			'items' => array(
				'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
				'page_about' => array(
					'type' => 'post_type',
					'object' => 'page',
					'object_id' => '{{about}}',
				),
				'page_menu' => array(
					'type' => 'post_type',
					'object' => 'page',
					'object_id' => '{{menu}}',
				),
				'page_blog',
				'page_contact'=> array(
					'type' => 'post_type',
					'object' => 'page',
					'object_id' => '{{contact}}',
				),
			),
		);

		// Social Menu configuration.
		$config['starter-content']['nav_menus']['social'] = array(
			'name' => __( 'Social Media Links', 'bgtfw' ),
			'items' => array(
				'link_yelp',
				'link_facebook',
				'link_twitter',
				'link_instagram',
				'link_email',
			),
		);


		// Set the default link color of the social menu location.
		$config['customizer']['controls']['bgtfw_menu_items_link_color_social']['default'] = 'color-1';

		// Set the default link hover state color of the social menu location.
		$config['customizer']['controls']['bgtfw_menu_items_hover_color_social']['default'] = 'color-3';

		// Set the default hover effect for the social menu location.
		$config['customizer']['controls']['bgtfw_menu_items_hover_effect_social']['default'] = 'hvr-underline-from-center';

		// Set social menu active link color defaults in case other menu items are assigned to this location.
		$config['customizer']['controls']['bgtfw_menu_items_active_link_color_social']['default'] = 'color-3';

		// Set the social media icon size.
		$config['social-icons']['size'] = 'large';

		// Ensure the social menu location hooks are removed when the footer is disabled.
		$config['menu']['footer_menus'][] = 'social';

		// Text Contrast Colors.
		$config['customizer-options']['colors']['light_text'] = '#ffffff';
		$config['customizer-options']['colors']['dark_text'] = '#333333';

		// Button Classes
		$config['components']['buttons']['variables']['button-primary-classes'] = '.btn, .btn-color-1, .btn-pill';
		$config['components']['buttons']['variables']['button-secondary-classes'] = '.btn, .btn-color-2, .btn-pill';

		// Configs above will override framework defaults.
		return $config;
	}
}

function bgtfw_get_contents( $filePath ) {
	return function () use ( $filePath ) {
		include get_template_directory() . '/starter-content/corporate/utility.php';

		ob_start();
		include get_template_directory() . '/starter-content/' . $filePath;
		$content = ob_get_contents();
		ob_end_clean();
		$content = str_replace( array( "\n", "\t" ), '', $content );

		return $content;
	};
}

add_filter( 'boldgrid_theme_framework_config', 'boldgrid_prime_framework_config' );

// Load the BoldGrid Library
if ( ! class_exists( 'Boldgrid_Premium_Loader' ) ) {
	require_once get_template_directory() . '/inc/class-boldgrid-premium-loader.php';
}

$loader = new Boldgrid_Premium_Loader();

// Enable the ClaimPremiumKey notice.
add_filter( 'Boldgrid\Library\Library\Notice\ClaimPremiumKey_enable', '__return_true' );
