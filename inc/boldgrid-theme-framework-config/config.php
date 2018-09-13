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
				'isLinked' => true,
				'values' => [
					'bottom' => 20,
				],
			],
		];

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
			'image-blogging-101' => array(
				'post_title' => _x( 'Blogging 101', 'Theme starter content', 'boldgrid-prime' ),
				'file' => 'images/blogging-101.png',
			),
			'image-basic-taxonomies' => array(
				'post_title' => _x( 'Basic Taxonomies', 'Theme starter content', 'boldgrid-prime' ),
				'file' => 'images/basic-taxonomies.png',
			),
			'image-tips-better-writing' => array(
				'post_title' => _x( 'Tips Better Writing', 'Theme starter content', 'boldgrid-prime' ),
				'file' => 'images/tips-better-writing.png',
			),
			'image-wordcamp-101' => array(
				'post_title' => _x( 'WordCamp 101', 'Theme starter content', 'boldgrid-prime' ),
				'file' => 'images/wordcamp-101.png',
			),
		);

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		$config['starter-content']['posts'] = array(
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
				'post_content' => bgtfw_get_contents( '/corporate/contact/content.php' ),
			),
			'bloging-101' => array(
				'post_type' => 'post',
				'post_title' => 'Blogging 101',
				'thumbnail' => '{{image-blogging-101}}',
				'post_content' => '',
			),
			'basic-taxonomies' => array(
				'post_type' => 'post',
				'post_title' => 'Basic Taxonomies',
				'thumbnail' => '{{image-basic-taxonomies}}',
				'post_content' => '<div class="boldgrid-section"><div class="container"><div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12"><h3>Categories and Tags</h3><p class="">If you write about a variety of subjects, categories can help your readers find the posts that are most relevant to them. For instance, if you run a consulting business, you may want some of your posts to reflect work you\'ve done with previous clients, while having other posts act as informational resources. In this particular case, you can set up 2 categories: one labeled <em><strong>Projects</strong></em> and another labeled <em><strong>Resources</strong></em>. You\'d then place your posts in their respective categories.</p><!--more Read more &gt; --><p class="">Categories are accessible from the post editor. There you can create new categories and assign them to your posts.</p><p class="">Tags, on the other hand, allow you to label your posts with relevant topics. For instance, within one of your resource posts you may choose to write about a set of project management tools. While you can certainly create a new category called "Project Management Tools," you may not plan to write about the topic often enough to justify giving it a dedicated category. Instead, you may want to tag your post with several topics that exists within the post; e.g. <em><strong>project management tools, communication, time tracking</strong></em>, etc.</p><p class="">What\'s great about tags is that they are searchable and provide your users another way to find content on your site. Anyone searching for "project management tools" will be able to locate any posts you\'ve tagged with those words!</p></div></div></div></div>',
			),
			'tips-for-writing' => array(
				'post_type' => 'post',
				'post_title' => 'Tips For Better Writing',
				'thumbnail' => '{{image-tips-better-writing}}',
				'post_content' => '<div class="boldgrid-section"><div class="container"><div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12"><h3>Plan Your Content</h3><p class="">If you\'re considering adding a blog to your site, you\'ll want to have a plan beforehand. Planning your blog will help your subject matter remain consistent over time. It\'ll also help you determine whether or not there\'s enough material to maintain a steady stream of posts.</p><p class="">One pitfall many new bloggers run into is starting a blog that isn\'t posted to frequently enough. A shortage of recent posts can give your visitors a bad impression of your business. One may think "I wonder if they’re still in business" or "they may want to hire a writer."</p><p class="">A blog, like any other customer facing aspect of your business, communicates your brand. If it isn\'t maintained and given proper attention, people will notice. Post regularly and keep your content fresh. Give your audience a reason to visit often.</p><p class=""><!--more Read more &gt; --></p><h3>Find Your Audience</h3><p class="">While on the topic of audiences, you\'ll likely want to identify yours early on. If your blog is going to be set up to compliment a business, your target audience will likely be the same as your consumer base; you\'re then writing for the same people that buy your product. You\'ll want to allow any marketing material you\'ve used inform the style and tone of your writing. Think of your blog as an extension of your company\'s brand. If, on the other hand, your business is completely new or you don\'t happen to be selling anything in particular, this is the time to start thinking about your brand.</p></div></div></div></div>',
			),
			'wordcamp-101' => array(
				'post_type' => 'post',
				'post_title' => 'WordCamp 101',
				'thumbnail' => '{{image-wordcamp-101}}',
				'post_content' => '<div class="boldgrid-section"><div class="container"><div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12"><p class="">What is WordCamp? It’s a place for WordPress enthusiasts to meet, greet, and speak about everything WordPress. Many in attendance play a much more active role in the WordPress community, guiding and assisting WordPress users all around the world through community-based Support Forums, and documentation from contributors on everything from installing WordPress to creating plugins.</p><h3>The WordPress Community</h3><p class="">At any given time, an announcement seeking speaker applications as well as organizing teams to attend WordCamp goes out to WordPress enthusiasts in North America, similar announcements can be seen in Africa, and Europe. As community members from around the world prepare for attendance, it’s at this time you may be wondering “What can you expect from attending a WordCamp?”.</p><p class="">It’s about everything WordPress. From developers and designers to first-time bloggers, WordCamp is a place to meet, collaborate, and discuss everything WordPress. The focus of the event is on using and developing for WordPress and all are welcome. First organized by Matt Mullenweg in 2006, and held in San Francisco, events continue to grow in attendance with local WordPress communities organizing over 796 WordCamp events in 65 countries spread across 6 continents. What stands out as astonishing is how the event organizers, speakers, and attendees are all volunteers from local WordPress communities. It is these local communities that together make the WordPress community as a whole, and that is the highlight of this post.</p><p class="">Visit the WordPress Support Forums and join in the community discussion here <a href="https://wordpress.org/support/" target="_blank" rel="noopener">https://wordpress.org/support/</a></p></div></div></div></div>',
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

		// Default header layout will be layout-3.
		$config['customizer']['controls']['bgtfw_header_top_layouts']['default'] = 'layout-1';

		// Default header will be in container.
		$config['customizer']['controls']['header_container']['default'] = 'container';

		// Default footer will be in container.
		$config['customizer']['controls']['footer_container']['default'] = 'container';

		// Default footer layout will be layout-7.
		$config['customizer']['controls']['bgtfw_footer_layouts']['default'] = 'layout-7';

		// Show blog and archives in a 1 column layout.
		$config['customizer']['controls']['bgtfw_pages_blog_blog_page_layout_columns']['default'] = '1';

		// Set the blog/archive pages sidebar display.
		$config['customizer']['controls']['bgtfw_blog_blog_page_sidebar']['default'] = 'right-sidebar';

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
			'font-family' => 'Lato',
			'font-size' => '42px',
			'text-transform' => 'uppercase',
			'line-height' => '1.1',
			'text-align' => 'left',
			'variant' => 'regular'
		);

		// Site's tagline typography defaults.
		$config['customizer']['controls']['bgtfw_tagline_typography']['default'] = array(
			'font-family' => 'Lato',
			'font-size' => '30px',
			'text-transform' => 'uppercase',
			'line-height' => '1.1',
			'text-align' => 'left',
			'variant' => '100'
		);

		// Site's body typography defaults.
		$config['customizer']['controls']['bgtfw_body_typography']['default'] = array(
			'font-family' => 'Lato',
			'font-size' => '17px',
			'line-height' => '1.4',
			'text-transform' => 'none',
			'variant' => '300'
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

		// Text Contrast Colors.
		$config['customizer-options']['colors']['light_text'] = '#ffffff';
		$config['customizer-options']['colors']['dark_text'] = '#333333';

		// Button Classes
		$config['components']['buttons']['variables']['button-primary-classes'] = '.btn, .btn-color-1, .btn-pill';
		$config['components']['buttons']['variables']['button-secondary-classes'] = '.btn, .btn-color-2, .btn-pill';

		// Social Icons.
		$config['social-icons']['size'] = 'large';

		// Remove footer menus when footer is disabled.
		$config['menu']['footer_menus'][] = 'social';

		// Configs above will override framework defaults.
		return $config;
	}
}

function bgtfw_get_contents( $filePath ) {
	include get_template_directory() . '/starter-content/corporate/utility.php';

	ob_start();
	include get_template_directory() . '/starter-content/' . $filePath;
	$content = ob_get_contents();
	ob_end_clean();

	return $content;
}

add_filter( 'boldgrid_theme_framework_config', 'boldgrid_prime_framework_config' );

// Load the BoldGrid Library
if ( ! class_exists( 'Boldgrid_Premium_Loader' ) ) {
	require_once get_template_directory() . '/inc/class-boldgrid-premium-loader.php';
}

$loader = new Boldgrid_Premium_Loader();

// Enable the ClaimPremiumKey notice.
add_filter( 'Boldgrid\Library\Library\Notice\ClaimPremiumKey_enable', '__return_true' );
