<?php
/**
 * GPoint Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GPoint
 * @since GPoint 1.0.0
 */

if ( ! function_exists( 'gpoint_support' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since GPoint 1.0.0
	 *
	 * @return void
	 */
	function gpoint_support() {
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add support for editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name' => __( 'Small', 'gpoint' ),
					'size' => 14,
					'slug' => 'small',
				),
				array(
					'name' => __( 'Normal', 'gpoint' ),
					'size' => 16,
					'slug' => 'normal',
				),
				array(
					'name' => __( 'Large', 'gpoint' ),
					'size' => 24,
					'slug' => 'large',
				),
				array(
					'name' => __( 'Extra Large', 'gpoint' ),
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
add_action( 'after_setup_theme', 'gpoint_support' );

/**
 * Enqueue scripts and styles.
 *
 * @since GPoint 1.0.0
 *
 * @return void
 */
function gpoint_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style(
		'gpoint-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	// Enqueue Swiper CSS.
	wp_enqueue_style(
		'swiper-css',
		'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
		array(),
		'11.0.0'
	);

	// Enqueue custom styles.
	wp_enqueue_style(
		'gpoint-custom-style',
		get_template_directory_uri() . '/assets/css/style.css',
		array( 'gpoint-style', 'swiper-css' ),
		wp_get_theme()->get( 'Version' )
	);

	// Enqueue Swiper JS.
	wp_enqueue_script(
		'swiper-js',
		'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
		array(),
		'11.0.0',
		true
	);

	// Enqueue custom JavaScript.
	wp_enqueue_script(
		'gpoint-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array( 'swiper-js' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'gpoint_scripts' );

/**
 * Register block pattern categories.
 *
 * @since GPoint 1.0.0
 *
 * @return void
 */
function gpoint_register_pattern_categories() {
	register_block_pattern_category(
		'gpoint',
		array(
			'label' => __( 'GPoint', 'gpoint' ),
		)
	);
}
add_action( 'init', 'gpoint_register_pattern_categories' );

/**
 * Include custom fields functionality.
 */
require_once get_template_directory() . '/includes/custom-fields.php';

