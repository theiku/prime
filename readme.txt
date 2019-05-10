=== Prime ===
Contributors: rramo012, timph
Tags: news, blog, e-commerce, sticky-post, theme-options, threaded-comments, full-width-template, footer-widgets, featured-images, flexible-header, custom-header, custom-logo, custom-background, custom-colors, custom-menu, editor-style, translation-ready, left-sidebar, right-sidebar, grid-layout, one-column, two-columns, three-columns, four-columns
Requires PHP: 5.4
Requires at least: 4.8
Tested up to: 5.2
Stable tag: 2.1.0
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0-standalone.html

Prime is a WordPress super theme that allows designers, developers and other web professionals to create without bounds.

== Description ==
Prime is a WordPress super theme that allows designers, developers and other web professionals to create without bounds or restrictions.  Prime’s advanced customization options are completely integrated with the WordPress Customizer API, providing you with a powerful, but familiar interface to customize your website. Our integration gives you granular control over many elements straight from the Customizer, and even device previews so you can see how your site looks on different devices. Crio’s unique color palette system keeps colors consistent across your site. Drag and drop colors in your palette to increase or decrease the usage of that color throughout your website. Use the advanced controls to create a custom Header, Footer, or Blog Page layout. Be Bold and stand above the rest with Prime by BoldGrid!

== Changelog ==

= 2.1.4 =
* New Feature: Users can now toggle on/off the "Scroll To Top" button from the customizer. [#78](https://github.com/BoldGrid/boldgrid-theme-framework/issues/78), [#79](https://github.com/BoldGrid/boldgrid-theme-framework/issues/79)
* New Feature: Users can now select different background blend modes for background image overlays in the customizer. [#85](https://github.com/BoldGrid/boldgrid-theme-framework/issues/85)
* Bugfix: Southwest alignment control for branding blocks should now be correctly aligned. [#80](https://github.com/BoldGrid/boldgrid-theme-framework/issues/80)
* Bugfix: Pagination elipses should no longer have hover effects applied. [#77](https://github.com/BoldGrid/boldgrid-theme-framework/issues/77)
* Bugfix: Parallax backgrounds should show up on the frontend site now. [#81](https://github.com/BoldGrid/boldgrid-theme-framework/issues/81)
* Bugfix: Parallax backgrounds should now fill entire screen in customizer. [#82](https://github.com/BoldGrid/boldgrid-theme-framework/issues/82)
* Bugfix: Fixed some issues for select elements not displaying with the correct styles on the frontend site.
* Update: WooCommerce templates and support have been updated for WooCommerce `3.6.2`.
	- This has continued our deprecation of the following templates:
		+ woocommerce/global/form-login.php
		+ woocommerce/single-product-reviews.php
		+ woocommerce/loop/orderby.php
	- WooCommerce `3.6.3` adds new hooks for quantity inputs in `woocommerce/global/quantity-input.php`.
		+ The template is updated to use `3.6.3`'s template with the hooks, and once `3.6.3` is released this template will be deprecated.
* Update: Raised minimum PHP version to 5.6.0.
* Update: Updated scssphp dep to latest version.
* Update: Removed jQuery Stellar library and added Jarallax for a smoother parallax effect and better performance.
* Update: Removed limitation of node 10.12.0 - 10.13.0 for build process. [#86](https://github.com/BoldGrid/boldgrid-theme-framework/pull/86)
* Update: Added support for WooCommerce's upcoming new hooks: `woocommerce_before_quantity_input_field`, and `woocommerce_after_quantity_input_field`.
* Update: Added `.form-control` and `.input-number` CSS classes to quantity inputs via `woocommerce_quantity_input_classes`.

= 2.1.3 =
* Bugfix: Fixed issue with dynamic imports resolving to incorrect paths.
* Update: Removed wp_deregister_style and wp_deregister_script calls for selectWoo.

= 2.1.2 =
* Bugfix: Added starter content's customizer query for blog posts.
* Bugfix: Removed closing div for widget areas in customizer.
* Update: Removed source maps for production build.

= 2.1.1 =
* Bugfix: Added missing skiplink from transition to dyanmic header/footer layouts introduced in 2.0.0.
* Bugfix: Fixed issue with meta chartset always being utf-8.
* Bugfix: Fixed issue with IE compatibility not always forcing edge mode (legacy only).
* Bugfix: Addressed various output escaping issues.
* New Feature: Added resources.txt for bundled resource license details.
* New Feature: Added readme.txt for WordPress.org's theme requirements.
* New Feature: Moved translation support from bgtfw to themes.
* New Feature: Added Crio page to the Appearances section in the dashboard.
* New Feature: Added new background patterns for customizer.
* New Feature: Added styles for Gutenberg buttons.
* Update: Removed NinjaForms bootstrap.css overrides.
* Update: Switched to MIT licensed animation library, everything works as it did before, including other plugins hooked in.
* Update: Removed starter content installation options from theme.
* Update: Users no longer redirected on theme activation.
* Update: Removed BoldGrid Library.  It can still be used in other themes if needed.
* Update: New theme screenshot added.
* Update: Replaced all non-GPL-2.0-or-later compatible images.
* Update: Updated WooCommerce templates for v3.5.7 compatibility.
	- This has continued our deprecation of several templates:
		+ woocommerce/single-product/add-to-cart/variable.php
		+ woocommerce/myaccount/form-reset-password.php
		+ woocommerce/myaccount/form-lost-password.php
		+ woocommerce/myaccount/form-login.php
		+ woocommerce/checkout/payment.php

= 2.1.0 =
* Update: Updated library to 2.7.6

= 2.1.0-rc.2 =
* Update: Updated WooCommerce templates for v3.5.2 compatibility.
* Update: Moved location of the composer vendor folder into parent theme dir.
* Update: Moved theme starter content welcome page to parent theme dir.
* Update: Changed default fonts for starter content.

= 2.1.0-rc.1 =
* Update: Added dynamic layout for sticky headers.
* Update: Added import defaults for header/footer/sticky-header layout.
* Update: Removed the following deprecated configs:
	- bgtfw_site_title_display
	- bgtfw_tagline_display
	- boldgrid_footer_widgets
	- bgtfw_header_top_layouts
	- header_container
	- footer_container
	- bgtfw_footer_layouts

= 2.1.0-alpha.1 =
* Update: Added dynamic layout methods to header/footer.
* Update: Changed title positions in template.
* Update: Removed a few wooCommerce templates that are no longer needed.

= 1.5.5 =
* Bug Fix: Fixing issue with grouped products.
* Bug Fix: Fixing issue with incorrect nonces passed.

= 1.5.4 =
* Update: Applied WooCommerce 3.4.0 template updates.

= 1.5.3 =
* Update: Applied WooCommerce template updates.

= 1.5.2 =
* Update: Updated wooCommerce templates for WC 3.3.0.
* Bug Fix: Fixed FOUC on button in my-account downloads template.

= 1.5.1 =
* Update: Switch to custom method for paging navigation.
* Bug Fix: Display a wrapping column on blog posts without sidebars.

= 1.5 =
* Update: Bump version.

= 1.4.5 =
* Update: Added new template tag method for entry-footer template.
* Bug Fix: Fixed issue with skip links not pointing to valid ID.
* Update: Updated wooCommerce empty cart and cart templates for v3.1 and removed widget overrides.

= 1.4.4 =
* Update: Addressing wooCommerce bugfixes for variable and grouped products' add to cart templates.
* Update: Fixing product search form classes.
* Update: Updated form-billing.php wooCommerce template for v3.0.9.

= 1.4.3 =

* Update: Added wooCommerce v3.0+ compatibility.

= 1.4.2 =

* Update: Added build process to provide a full theme .zip for users to download from github.
* Update: Created additional wooCommerce templates to integrate with BoldGrid Theme Framework
* Update: Prime now uses the standard header/footer "generic" templates.

= 1.4.1 =

* Update: Improving wooCommerce integration with BoldGrid Theme Framework.

= 1.4 =

* Bump version.

= 1.2.3 =

* Update: Added gulp to package deps.

= 1.2.2 =

* Update: Updating code standards.

= 1.2.1 =

* Bug Fix: Removing search template container classes.

= 1.2 =

* Bug Fix: Display 404 information only if it's found.
* Bug Fix: Fixing the page count for "Page Sitemap."

= 1.1.5 =

* Bug Fix: Always print container markup in entry-header.

= 1.1.4 =

* Bug Fix: Home page title causes duplicate H1 tags.

= 1.1.3 =

* New feature: Framework Version in use now displayed in HTML comment for easier reference.

= 1.1.2 =

* Bug Fix: Don't print out a link if there's no title for page or post in recent-entries template.
* Bug Fix: Sidebar not displaying correctly on search pages.

= 1.1.1 =

* Bug Fix: Fixed issue for site with no posts or pages.
* New feature: Add empty widget area messages for sidebar.
* Bug Fix: Let variables get passed in to CTA template.

= 1.1 =

* New feature: Added Container Configs.

= 1.0 =

* Initial Release
