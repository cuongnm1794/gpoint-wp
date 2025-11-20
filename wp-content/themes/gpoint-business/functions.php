<?php
/**
 * GPoint Business Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GPoint_Business
 * @since GPoint Business 1.0.0
 */

if ( ! function_exists( 'gpoint_business_support' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since GPoint Business 1.0.0
	 *
	 * @return void
	 */
	function gpoint_business_support() {
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
		add_editor_style( 'assets/css/bootstrap.min.css' );
		add_editor_style( 'assets/css/lineicons.css' );
		add_editor_style( 'assets/css/style.css' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add support for editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name' => __( 'Small', 'gpoint-business' ),
					'size' => 14,
					'slug' => 'small',
				),
				array(
					'name' => __( 'Normal', 'gpoint-business' ),
					'size' => 16,
					'slug' => 'normal',
				),
				array(
					'name' => __( 'Large', 'gpoint-business' ),
					'size' => 24,
					'slug' => 'large',
				),
				array(
					'name' => __( 'Extra Large', 'gpoint-business' ),
					'size' => 36,
					'slug' => 'extra-large',
				),
			)
		);

		// Add support for custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 60,
				'width'       => 200,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		// Add support for post thumbnails.
		add_theme_support( 'post-thumbnails' );

		// Add support for title tag.
		add_theme_support( 'title-tag' );

		// Add support for automatic feed links.
		add_theme_support( 'automatic-feed-links' );
	}
endif;
add_action( 'after_setup_theme', 'gpoint_business_support' );

/**
 * Enqueue scripts and styles.
 *
 * @since GPoint Business 1.0.0
 *
 * @return void
 */
function gpoint_business_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// Enqueue Bootstrap CSS.
	wp_enqueue_style(
		'bootstrap-css',
		get_template_directory_uri() . '/assets/css/bootstrap.min.css',
		array(),
		'5.3.0'
	);

	// Enqueue LineIcons CSS.
	wp_enqueue_style(
		'lineicons-css',
		get_template_directory_uri() . '/assets/css/lineicons.css',
		array(),
		$theme_version
	);

	// Enqueue Tiny Slider CSS.
	wp_enqueue_style(
		'tiny-slider-css',
		get_template_directory_uri() . '/assets/css/tiny-slider.css',
		array(),
		$theme_version
	);

	// Enqueue GLightbox CSS.
	wp_enqueue_style(
		'glightbox-css',
		get_template_directory_uri() . '/assets/css/glightbox.min.css',
		array(),
		$theme_version
	);

	// Enqueue theme stylesheet.
	wp_enqueue_style(
		'gpoint-business-style',
		get_stylesheet_uri(),
		array(),
		$theme_version
	);

	// Enqueue custom styles.
	wp_enqueue_style(
		'gpoint-business-custom-style',
		get_template_directory_uri() . '/assets/css/style.css',
		array( 'bootstrap-css', 'lineicons-css', 'glightbox-css' ),
		$theme_version
	);

	// Enqueue Bootstrap JS.
	wp_enqueue_script(
		'bootstrap-js',
		get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
		array(),
		'5.3.0',
		true
	);

	// Enqueue GLightbox JS.
	wp_enqueue_script(
		'glightbox-js',
		get_template_directory_uri() . '/assets/js/glightbox.min.js',
		array(),
		$theme_version,
		true
	);

	// Enqueue Tiny Slider JS.
	wp_enqueue_script(
		'tiny-slider-js',
		get_template_directory_uri() . '/assets/js/tiny-slider.js',
		array(),
		$theme_version,
		true
	);

	// Enqueue custom JavaScript.
	wp_enqueue_script(
		'gpoint-business-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array( 'bootstrap-js', 'glightbox-js' ),
		$theme_version,
		true
	);

	// Localize script for AJAX
	wp_localize_script(
		'gpoint-business-main',
		'gpointContactForm',
		array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'nonce'    => wp_create_nonce( 'gpoint_contact_form' ),
		)
	);

	// Enqueue theme JavaScript for navbar and sidebar functionality.
	wp_add_inline_script(
		'gpoint-business-main',
		'
		//===== close navbar-collapse when clicked
		document.addEventListener("DOMContentLoaded", function() {
			let navbarTogglerNine = document.querySelector(".navbar-nine .navbar-toggler");
			if (navbarTogglerNine) {
				navbarTogglerNine.addEventListener("click", function () {
					navbarTogglerNine.classList.toggle("active");
				});
			}

			// ==== left sidebar toggle
			let sidebarLeft = document.querySelector(".sidebar-left");
			let overlayLeft = document.querySelector(".overlay-left");
			let sidebarClose = document.querySelector(".sidebar-close .close");
			let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

			if (overlayLeft) {
				overlayLeft.addEventListener("click", function () {
					if (sidebarLeft) sidebarLeft.classList.toggle("open");
					overlayLeft.classList.toggle("open");
				});
			}

			if (sidebarClose) {
				sidebarClose.addEventListener("click", function () {
					if (sidebarLeft) sidebarLeft.classList.remove("open");
					if (overlayLeft) overlayLeft.classList.remove("open");
				});
			}

			// ===== navbar nine sideMenu
			if (sideMenuLeftNine) {
				sideMenuLeftNine.addEventListener("click", function () {
					if (sidebarLeft) sidebarLeft.classList.add("open");
					if (overlayLeft) overlayLeft.classList.add("open");
				});
			}

			//========= glightbox initialization
			if (typeof GLightbox !== "undefined") {
				GLightbox({
					selector: ".glightbox",
					autoplayVideos: true,
				});
			}

			// Scroll to top functionality
			let scrollTop = document.querySelector(".scroll-top");
			if (scrollTop) {
				window.addEventListener("scroll", function() {
					if (window.pageYOffset > 300) {
						scrollTop.style.display = "flex";
					} else {
						scrollTop.style.display = "none";
					}
				});

				scrollTop.addEventListener("click", function(e) {
					e.preventDefault();
					window.scrollTo({
						top: 0,
						behavior: "smooth"
					});
				});
			}
		});
		'
	);
}
add_action( 'wp_enqueue_scripts', 'gpoint_business_scripts' );

/**
 * Register block pattern categories.
 *
 * @since GPoint Business 1.0.0
 *
 * @return void
 */
function gpoint_business_register_pattern_categories() {
	register_block_pattern_category(
		'gpoint-business',
		array(
			'label' => __( 'GPoint Business', 'gpoint-business' ),
		)
	);
}
add_action( 'init', 'gpoint_business_register_pattern_categories' );

/**
 * Enqueue editor styles for Site Editor.
 *
 * @since GPoint Business 1.0.0
 *
 * @return void
 */
function gpoint_business_editor_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// Enqueue Bootstrap CSS for editor.
	wp_enqueue_style(
		'bootstrap-css-editor',
		get_template_directory_uri() . '/assets/css/bootstrap.min.css',
		array(),
		'5.3.0'
	);

	// Enqueue LineIcons CSS for editor.
	wp_enqueue_style(
		'lineicons-css-editor',
		get_template_directory_uri() . '/assets/css/lineicons.css',
		array(),
		$theme_version
	);

	// Enqueue Tiny Slider CSS for editor.
	wp_enqueue_style(
		'tiny-slider-css-editor',
		get_template_directory_uri() . '/assets/css/tiny-slider.css',
		array(),
		$theme_version
	);

	// Enqueue GLightbox CSS for editor.
	wp_enqueue_style(
		'glightbox-css-editor',
		get_template_directory_uri() . '/assets/css/glightbox.min.css',
		array(),
		$theme_version
	);

	// Enqueue theme stylesheet for editor.
	wp_enqueue_style(
		'gpoint-business-style-editor',
		get_stylesheet_uri(),
		array(),
		$theme_version
	);

	// Enqueue custom styles for editor.
	wp_enqueue_style(
		'gpoint-business-custom-style-editor',
		get_template_directory_uri() . '/assets/css/style.css',
		array( 'bootstrap-css-editor', 'lineicons-css-editor', 'glightbox-css-editor' ),
		$theme_version
	);
}
add_action( 'enqueue_block_editor_assets', 'gpoint_business_editor_styles' );

/**
 * Enqueue block assets for Site Editor iframe content.
 * This ensures CSS is loaded in the iframe preview of Site Editor.
 * Note: enqueue_block_assets is called both on frontend and in editor iframe.
 * WordPress handles deduplication automatically.
 *
 * @since GPoint Business 1.0.0
 *
 * @return void
 */
function gpoint_business_block_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// Enqueue Bootstrap CSS for editor iframe.
	wp_enqueue_style(
		'bootstrap-css-block-assets',
		get_template_directory_uri() . '/assets/css/bootstrap.min.css',
		array(),
		'5.3.0'
	);

	// Enqueue LineIcons CSS for editor iframe.
	wp_enqueue_style(
		'lineicons-css-block-assets',
		get_template_directory_uri() . '/assets/css/lineicons.css',
		array(),
		$theme_version
	);

	// Enqueue Tiny Slider CSS for editor iframe.
	wp_enqueue_style(
		'tiny-slider-css-block-assets',
		get_template_directory_uri() . '/assets/css/tiny-slider.css',
		array(),
		$theme_version
	);

	// Enqueue GLightbox CSS for editor iframe.
	wp_enqueue_style(
		'glightbox-css-block-assets',
		get_template_directory_uri() . '/assets/css/glightbox.min.css',
		array(),
		$theme_version
	);

	// Enqueue theme stylesheet for editor iframe.
	wp_enqueue_style(
		'gpoint-business-style-block-assets',
		get_stylesheet_uri(),
		array(),
		$theme_version
	);

	// Enqueue custom styles for editor iframe.
	wp_enqueue_style(
		'gpoint-business-custom-style-block-assets',
		get_template_directory_uri() . '/assets/css/style.css',
		array( 'bootstrap-css-block-assets', 'lineicons-css-block-assets', 'glightbox-css-block-assets' ),
		$theme_version
	);
}
add_action( 'enqueue_block_assets', 'gpoint_business_block_assets' );

/**
 * Include Customizer settings registration.
 */
require_once get_template_directory() . '/includes/customizer-settings.php';

/**
 * Include Contact Form Handler.
 */
require_once get_template_directory() . '/includes/contact-form-handler.php';

/**
 * Helper function to render site logo HTML.
 * 
 * @param int $width Logo width in pixels.
 * @param bool $is_link Whether to wrap logo in link.
 * @return string Logo HTML.
 */
function gpoint_business_get_logo_html( $width = 60, $is_link = false ) {
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	
	if ( $custom_logo_id ) {
		$logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );
		if ( $logo ) {
			$logo_html = '<img src="' . esc_url( $logo[0] ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" width="' . esc_attr( $width ) . '" />';
			if ( $is_link ) {
				$logo_html = '<a href="' . esc_url( home_url( '/' ) ) . '">' . $logo_html . '</a>';
			}
			return $logo_html;
		}
	}
	
	// Fallback to default logo
	$default_logo = get_template_directory_uri() . '/assets/images/white-logo.svg';
	$logo_html = '<img src="' . esc_url( $default_logo ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" width="' . esc_attr( $width ) . '" />';
	if ( $is_link ) {
		$logo_html = '<a href="' . esc_url( home_url( '/' ) ) . '">' . $logo_html . '</a>';
	}
	return $logo_html;
}

/**
 * Shortcode to display site logo.
 * 
 * Usage: [gpoint_logo width="60"]
 */
function gpoint_business_logo_shortcode( $atts ) {
	$atts = shortcode_atts( array(
		'width' => 60,
		'link' => 'true',
	), $atts );
	
	$is_link = filter_var( $atts['link'], FILTER_VALIDATE_BOOLEAN );
	return gpoint_business_get_logo_html( intval( $atts['width'] ), $is_link );
}
add_shortcode( 'gpoint_logo', 'gpoint_business_logo_shortcode' );

/**
 * Enable shortcodes in HTML blocks.
 */
add_filter( 'render_block_core/html', function( $block_content, $block ) {
	if ( ! empty( $block_content ) && has_shortcode( $block_content, 'gpoint_logo' ) ) {
		$block_content = do_shortcode( $block_content );
	}
	return $block_content;
}, 10, 2 );

