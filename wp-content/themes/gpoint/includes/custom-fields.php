<?php
/**
 * Custom Fields for GPoint Theme
 * Manages custom fields for hero slider, stats, solutions, etc.
 *
 * @package GPoint
 * @since GPoint 1.0.0
 */

/**
 * Register custom meta boxes for theme options
 */
function gpoint_register_meta_boxes() {
	add_meta_box(
		'gpoint_hero_slider',
		__( 'Hero Slider Settings', 'gpoint' ),
		'gpoint_hero_slider_callback',
		'page',
		'normal',
		'high'
	);

	add_meta_box(
		'gpoint_stats',
		__( 'Stats Section', 'gpoint' ),
		'gpoint_stats_callback',
		'page',
		'normal',
		'high'
	);

	add_meta_box(
		'gpoint_solutions',
		__( 'Solutions Settings', 'gpoint' ),
		'gpoint_solutions_callback',
		'page',
		'normal',
		'high'
	);

	add_meta_box(
		'gpoint_why_choose_us',
		__( 'Why Choose Us', 'gpoint' ),
		'gpoint_why_choose_us_callback',
		'page',
		'normal',
		'high'
	);

	add_meta_box(
		'gpoint_partners',
		__( 'Partners Logos', 'gpoint' ),
		'gpoint_partners_callback',
		'page',
		'normal',
		'high'
	);

	add_meta_box(
		'gpoint_contact_info',
		__( 'Contact Information', 'gpoint' ),
		'gpoint_contact_info_callback',
		'page',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'gpoint_register_meta_boxes' );

/**
 * Hero Slider Meta Box Callback
 */
function gpoint_hero_slider_callback( $post ) {
	wp_nonce_field( 'gpoint_save_meta', 'gpoint_meta_nonce' );
	
	$slides = get_post_meta( $post->ID, '_gpoint_hero_slides', true );
	if ( ! is_array( $slides ) ) {
		$slides = array();
	}
	
	?>
	<div id="gpoint-hero-slides">
		<p><strong><?php esc_html_e( 'Hero Slider Slides', 'gpoint' ); ?></strong></p>
		<div id="hero-slides-container">
			<?php
			if ( ! empty( $slides ) ) {
				foreach ( $slides as $index => $slide ) {
					gpoint_render_slide_fields( $index, $slide );
				}
			} else {
				gpoint_render_slide_fields( 0, array() );
			}
			?>
		</div>
		<button type="button" class="button" id="add-slide"><?php esc_html_e( 'Add Slide', 'gpoint' ); ?></button>
	</div>
	<script>
	jQuery(document).ready(function($) {
		var slideIndex = <?php echo count( $slides ); ?>;
		$('#add-slide').on('click', function() {
			var slideHtml = '<div class="slide-item" style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">' +
				'<p><label><strong>Title:</strong><br><input type="text" name="gpoint_hero_slides[' + slideIndex + '][title]" value="" style="width: 100%;"></label></p>' +
				'<p><label><strong>Description:</strong><br><textarea name="gpoint_hero_slides[' + slideIndex + '][description]" rows="3" style="width: 100%;"></textarea></label></p>' +
				'<p><label><strong>Image URL:</strong><br><input type="url" name="gpoint_hero_slides[' + slideIndex + '][image]" value="" style="width: 80%;"><button type="button" class="button upload-image">Upload</button></label></p>' +
				'<p><label><strong>CTA Button Text:</strong><br><input type="text" name="gpoint_hero_slides[' + slideIndex + '][cta_text]" value="" style="width: 100%;"></label></p>' +
				'<p><label><strong>CTA Button Link:</strong><br><input type="url" name="gpoint_hero_slides[' + slideIndex + '][cta_link]" value="" style="width: 100%;"></label></p>' +
				'<button type="button" class="button remove-slide">Remove</button>' +
				'</div>';
			$('#hero-slides-container').append(slideHtml);
			slideIndex++;
		});
		$(document).on('click', '.remove-slide', function() {
			$(this).closest('.slide-item').remove();
		});
	});
	</script>
	<?php
}

function gpoint_render_slide_fields( $index, $slide ) {
	$title = isset( $slide['title'] ) ? esc_attr( $slide['title'] ) : '';
	$description = isset( $slide['description'] ) ? esc_textarea( $slide['description'] ) : '';
	$image = isset( $slide['image'] ) ? esc_url( $slide['image'] ) : '';
	$cta_text = isset( $slide['cta_text'] ) ? esc_attr( $slide['cta_text'] ) : '';
	$cta_link = isset( $slide['cta_link'] ) ? esc_url( $slide['cta_link'] ) : '';
	?>
	<div class="slide-item" style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
		<p><label><strong>Title:</strong><br><input type="text" name="gpoint_hero_slides[<?php echo esc_attr( $index ); ?>][title]" value="<?php echo $title; ?>" style="width: 100%;"></label></p>
		<p><label><strong>Description:</strong><br><textarea name="gpoint_hero_slides[<?php echo esc_attr( $index ); ?>][description]" rows="3" style="width: 100%;"><?php echo $description; ?></textarea></label></p>
		<p><label><strong>Image URL:</strong><br><input type="url" name="gpoint_hero_slides[<?php echo esc_attr( $index ); ?>][image]" value="<?php echo $image; ?>" style="width: 80%;"><button type="button" class="button upload-image">Upload</button></label></p>
		<p><label><strong>CTA Button Text:</strong><br><input type="text" name="gpoint_hero_slides[<?php echo esc_attr( $index ); ?>][cta_text]" value="<?php echo $cta_text; ?>" style="width: 100%;"></label></p>
		<p><label><strong>CTA Button Link:</strong><br><input type="url" name="gpoint_hero_slides[<?php echo esc_attr( $index ); ?>][cta_link]" value="<?php echo $cta_link; ?>" style="width: 100%;"></label></p>
		<button type="button" class="button remove-slide">Remove</button>
	</div>
	<?php
}

/**
 * Stats Meta Box Callback
 */
function gpoint_stats_callback( $post ) {
	wp_nonce_field( 'gpoint_save_meta', 'gpoint_meta_nonce' );
	
	$stats = get_post_meta( $post->ID, '_gpoint_stats', true );
	if ( ! is_array( $stats ) ) {
		$stats = array();
	}
	
	?>
	<p><strong><?php esc_html_e( 'Statistics (6 items)', 'gpoint' ); ?></strong></p>
	<div id="stats-container">
		<?php
		for ( $i = 0; $i < 6; $i++ ) {
			$stat = isset( $stats[ $i ] ) ? $stats[ $i ] : array();
			$number = isset( $stat['number'] ) ? esc_attr( $stat['number'] ) : '';
			$description = isset( $stat['description'] ) ? esc_attr( $stat['description'] ) : '';
			?>
			<div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
				<p><label><strong>Stat <?php echo $i + 1; ?> - Number:</strong><br><input type="text" name="gpoint_stats[<?php echo $i; ?>][number]" value="<?php echo $number; ?>" style="width: 100%;"></label></p>
				<p><label><strong>Stat <?php echo $i + 1; ?> - Description:</strong><br><input type="text" name="gpoint_stats[<?php echo $i; ?>][description]" value="<?php echo $description; ?>" style="width: 100%;"></label></p>
			</div>
			<?php
		}
		?>
	</div>
	<?php
}

/**
 * Solutions Meta Box Callback
 */
function gpoint_solutions_callback( $post ) {
	wp_nonce_field( 'gpoint_save_meta', 'gpoint_meta_nonce' );
	
	$solutions = get_post_meta( $post->ID, '_gpoint_solutions', true );
	if ( ! is_array( $solutions ) ) {
		$solutions = array();
	}
	
	$solution_titles = array( 'Growth Zalo Solution', 'Growth Website', 'Giải pháp quản lý dữ liệu', 'Quản lý tương tác đa kênh' );
	
	?>
	<p><strong><?php esc_html_e( 'Solutions (4 items)', 'gpoint' ); ?></strong></p>
	<div id="solutions-container">
		<?php
		for ( $i = 0; $i < 4; $i++ ) {
			$solution = isset( $solutions[ $i ] ) ? $solutions[ $i ] : array();
			$title = isset( $solution['title'] ) ? esc_attr( $solution['title'] ) : ( isset( $solution_titles[ $i ] ) ? $solution_titles[ $i ] : '' );
			$description = isset( $solution['description'] ) ? esc_textarea( $solution['description'] ) : '';
			$features = isset( $solution['features'] ) ? esc_textarea( $solution['features'] ) : '';
			?>
			<div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
				<p><label><strong>Solution <?php echo $i + 1; ?> - Title:</strong><br><input type="text" name="gpoint_solutions[<?php echo $i; ?>][title]" value="<?php echo $title; ?>" style="width: 100%;"></label></p>
				<p><label><strong>Solution <?php echo $i + 1; ?> - Description:</strong><br><textarea name="gpoint_solutions[<?php echo $i; ?>][description]" rows="3" style="width: 100%;"><?php echo $description; ?></textarea></label></p>
				<p><label><strong>Solution <?php echo $i + 1; ?> - Features (one per line):</strong><br><textarea name="gpoint_solutions[<?php echo $i; ?>][features]" rows="5" style="width: 100%;"><?php echo $features; ?></textarea></label></p>
			</div>
			<?php
		}
		?>
	</div>
	<?php
}

/**
 * Why Choose Us Meta Box Callback
 */
function gpoint_why_choose_us_callback( $post ) {
	wp_nonce_field( 'gpoint_save_meta', 'gpoint_meta_nonce' );
	
	$items = get_post_meta( $post->ID, '_gpoint_why_choose_us', true );
	if ( ! is_array( $items ) ) {
		$items = array();
	}
	
	?>
	<p><strong><?php esc_html_e( 'Why Choose Us (6 items)', 'gpoint' ); ?></strong></p>
	<div id="why-choose-us-container">
		<?php
		for ( $i = 0; $i < 6; $i++ ) {
			$item = isset( $items[ $i ] ) ? $items[ $i ] : array();
			$title = isset( $item['title'] ) ? esc_attr( $item['title'] ) : '';
			$description = isset( $item['description'] ) ? esc_textarea( $item['description'] ) : '';
			$icon = isset( $item['icon'] ) ? esc_url( $item['icon'] ) : '';
			?>
			<div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
				<p><label><strong>Item <?php echo $i + 1; ?> - Title:</strong><br><input type="text" name="gpoint_why_choose_us[<?php echo $i; ?>][title]" value="<?php echo $title; ?>" style="width: 100%;"></label></p>
				<p><label><strong>Item <?php echo $i + 1; ?> - Description:</strong><br><textarea name="gpoint_why_choose_us[<?php echo $i; ?>][description]" rows="3" style="width: 100%;"><?php echo $description; ?></textarea></label></p>
				<p><label><strong>Item <?php echo $i + 1; ?> - Icon URL:</strong><br><input type="url" name="gpoint_why_choose_us[<?php echo $i; ?>][icon]" value="<?php echo $icon; ?>" style="width: 80%;"><button type="button" class="button upload-image">Upload</button></label></p>
			</div>
			<?php
		}
		?>
	</div>
	<?php
}

/**
 * Partners Meta Box Callback
 */
function gpoint_partners_callback( $post ) {
	wp_nonce_field( 'gpoint_save_meta', 'gpoint_meta_nonce' );
	
	$partners = get_post_meta( $post->ID, '_gpoint_partners', true );
	if ( ! is_array( $partners ) ) {
		$partners = array();
	}
	
	?>
	<p><strong><?php esc_html_e( 'Partner Logos', 'gpoint' ); ?></strong></p>
	<div id="partners-container">
		<?php
		for ( $i = 0; $i < 5; $i++ ) {
			$logo = isset( $partners[ $i ] ) ? esc_url( $partners[ $i ] ) : '';
			?>
			<div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
				<p><label><strong>Partner <?php echo $i + 1; ?> Logo URL:</strong><br><input type="url" name="gpoint_partners[<?php echo $i; ?>]" value="<?php echo $logo; ?>" style="width: 80%;"><button type="button" class="button upload-image">Upload</button></label></p>
			</div>
			<?php
		}
		?>
	</div>
	<?php
}

/**
 * Contact Info Meta Box Callback
 */
function gpoint_contact_info_callback( $post ) {
	wp_nonce_field( 'gpoint_save_meta', 'gpoint_meta_nonce' );
	
	$email = get_post_meta( $post->ID, '_gpoint_contact_email', true );
	$phone = get_post_meta( $post->ID, '_gpoint_contact_phone', true );
	$address = get_post_meta( $post->ID, '_gpoint_contact_address', true );
	
	?>
	<p><label><strong><?php esc_html_e( 'Email:', 'gpoint' ); ?></strong><br><input type="email" name="gpoint_contact_email" value="<?php echo esc_attr( $email ); ?>" style="width: 100%;"></label></p>
	<p><label><strong><?php esc_html_e( 'Phone:', 'gpoint' ); ?></strong><br><input type="text" name="gpoint_contact_phone" value="<?php echo esc_attr( $phone ); ?>" style="width: 100%;"></label></p>
	<p><label><strong><?php esc_html_e( 'Address:', 'gpoint' ); ?></strong><br><textarea name="gpoint_contact_address" rows="3" style="width: 100%;"><?php echo esc_textarea( $address ); ?></textarea></label></p>
	<?php
}

/**
 * Save meta box data
 */
function gpoint_save_meta_boxes( $post_id ) {
	// Check nonce
	if ( ! isset( $_POST['gpoint_meta_nonce'] ) || ! wp_verify_nonce( $_POST['gpoint_meta_nonce'], 'gpoint_save_meta' ) ) {
		return;
	}

	// Check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check permissions
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	// Save hero slides
	if ( isset( $_POST['gpoint_hero_slides'] ) ) {
		update_post_meta( $post_id, '_gpoint_hero_slides', $_POST['gpoint_hero_slides'] );
	}

	// Save stats
	if ( isset( $_POST['gpoint_stats'] ) ) {
		update_post_meta( $post_id, '_gpoint_stats', $_POST['gpoint_stats'] );
	}

	// Save solutions
	if ( isset( $_POST['gpoint_solutions'] ) ) {
		update_post_meta( $post_id, '_gpoint_solutions', $_POST['gpoint_solutions'] );
	}

	// Save why choose us
	if ( isset( $_POST['gpoint_why_choose_us'] ) ) {
		update_post_meta( $post_id, '_gpoint_why_choose_us', $_POST['gpoint_why_choose_us'] );
	}

	// Save partners
	if ( isset( $_POST['gpoint_partners'] ) ) {
		update_post_meta( $post_id, '_gpoint_partners', $_POST['gpoint_partners'] );
	}

	// Save contact info
	if ( isset( $_POST['gpoint_contact_email'] ) ) {
		update_post_meta( $post_id, '_gpoint_contact_email', sanitize_email( $_POST['gpoint_contact_email'] ) );
	}
	if ( isset( $_POST['gpoint_contact_phone'] ) ) {
		update_post_meta( $post_id, '_gpoint_contact_phone', sanitize_text_field( $_POST['gpoint_contact_phone'] ) );
	}
	if ( isset( $_POST['gpoint_contact_address'] ) ) {
		update_post_meta( $post_id, '_gpoint_contact_address', sanitize_textarea_field( $_POST['gpoint_contact_address'] ) );
	}
}
add_action( 'save_post', 'gpoint_save_meta_boxes' );

/**
 * Helper function to get theme option
 */
function gpoint_get_option( $post_id, $option_name, $default = '' ) {
	$value = get_post_meta( $post_id, $option_name, true );
	return ! empty( $value ) ? $value : $default;
}

