<?php
/**
 * BusinessOrange Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BusinessOrange
 * @since BusinessOrange 1.0.0
 */

if ( ! function_exists( 'businessorange_support' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since BusinessOrange 1.0.0
	 *
	 * @return void
	 */
	function businessorange_support() {
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
					'name' => __( 'Small', 'businessorange' ),
					'size' => 14,
					'slug' => 'small',
				),
				array(
					'name' => __( 'Normal', 'businessorange' ),
					'size' => 16,
					'slug' => 'normal',
				),
				array(
					'name' => __( 'Large', 'businessorange' ),
					'size' => 24,
					'slug' => 'large',
				),
				array(
					'name' => __( 'Extra Large', 'businessorange' ),
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
add_action( 'after_setup_theme', 'businessorange_support' );

/**
 * Enqueue scripts and styles.
 *
 * @since BusinessOrange 1.0.0
 *
 * @return void
 */
function businessorange_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style(
		'businessorange-style',
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
		'businessorange-custom-style',
		get_template_directory_uri() . '/assets/css/style.css',
		array( 'businessorange-style', 'swiper-css' ),
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
		'businessorange-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array( 'swiper-js' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'businessorange_scripts' );

/**
 * Register block pattern categories.
 *
 * @since BusinessOrange 1.0.0
 *
 * @return void
 */
function businessorange_register_pattern_categories() {
	register_block_pattern_category(
		'businessorange',
		array(
			'label' => __( 'BusinessOrange', 'businessorange' ),
		)
	);
}
add_action( 'init', 'businessorange_register_pattern_categories' );

/**
 * Include custom fields functionality.
 */
require_once get_template_directory() . '/includes/custom-fields.php';

/**
 * Include ACF fields registration.
 */
require_once get_template_directory() . '/includes/acf-fields.php';

/**
 * Allow HTML in navigation menu item titles.
 * This enables admins to use HTML formatting in menu labels for classic menus.
 *
 * @since BusinessOrange 1.0.0
 *
 * @param string $title The menu item title.
 * @param object $item  The menu item object.
 * @return string The menu item title with HTML allowed.
 */
function businessorange_nav_menu_item_title( $title, $item = null ) {
	// Allow HTML tags in menu item titles (safe HTML only)
	return wp_kses_post( $title );
}
add_filter( 'nav_menu_item_title', 'businessorange_nav_menu_item_title', 10, 2 );

/**
 * Filter navigation menu item output to allow HTML.
 * This handles classic navigation menus.
 *
 * @since BusinessOrange 1.0.0
 *
 * @param string $item_output The menu item's starting HTML output.
 * @param object $item        Menu item data object.
 * @param int    $depth       Depth of menu item. Used for padding.
 * @param array  $args        An array of arguments.
 * @return string Modified menu item output.
 */
function businessorange_walker_nav_menu_start_el( $item_output, $item, $depth, $args ) {
	// Get the title with HTML allowed
	$title = apply_filters( 'nav_menu_item_title', $item->title, $item );
	
	// Replace the escaped title in the output with HTML-allowed version
	// Match the link content and replace it
	if ( preg_match( '/(<a[^>]*>)(.*?)(<\/a>)/is', $item_output, $matches ) ) {
		$item_output = str_replace( $matches[2], $title, $item_output );
	}
	
	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'businessorange_walker_nav_menu_start_el', 10, 4 );

/**
 * Allow HTML in navigation block menu item labels.
 * This filter handles the block editor navigation blocks by filtering menu items
 * before they're converted to blocks.
 *
 * @since BusinessOrange 1.0.0
 *
 * @param WP_Post $menu_item The menu item object.
 * @return WP_Post Modified menu item object.
 */
function businessorange_setup_nav_menu_item( $menu_item ) {
	// Preserve HTML in menu item title for block navigation
	if ( isset( $menu_item->title ) ) {
		// The title is already stored, but we ensure HTML is preserved when rendered
		$menu_item->title = wp_kses_post( $menu_item->title );
	}
	return $menu_item;
}
add_filter( 'wp_setup_nav_menu_item', 'businessorange_setup_nav_menu_item' );

/**
 * Filter navigation block rendering to allow HTML in labels.
 * This ensures HTML is properly rendered in navigation block menu items.
 *
 * @since BusinessOrange 1.0.0
 *
 * @param string   $block_content The block content about to be appended.
 * @param array    $block         The full block, including name and attributes.
 * @param WP_Block $instance      The block instance.
 * @return string Modified block content.
 */
function businessorange_render_navigation_block( $block_content, $block, $instance ) {
	// Only process navigation-link and navigation-submenu blocks
	if ( ! in_array( $block['blockName'], array( 'core/navigation-link', 'core/navigation-submenu' ), true ) ) {
		return $block_content;
	}
	
	// If label contains HTML, ensure it's rendered properly
	if ( isset( $block['attrs']['label'] ) ) {
		$label = wp_kses_post( $block['attrs']['label'] );
		// Replace escaped label in the output if needed
		$escaped_label = esc_html( $block['attrs']['label'] );
		if ( $escaped_label !== $block['attrs']['label'] && strpos( $block_content, $escaped_label ) !== false ) {
			$block_content = str_replace( $escaped_label, $label, $block_content );
		}
	}
	
	return $block_content;
}
add_filter( 'render_block', 'businessorange_render_navigation_block', 10, 3 );

