<?php
/**
 * Custom Fields for BusinessOrange Theme
 * Manages custom fields for hero, about, services, pricing, blog, clients, contact
 *
 * @package BusinessOrange
 * @since BusinessOrange 1.0.0
 */

/**
 * Register custom meta boxes for theme options
 */
function businessorange_register_meta_boxes() {
	add_meta_box(
		'businessorange_hero',
		__( 'Hero Section Settings', 'businessorange' ),
		'businessorange_hero_callback',
		'page',
		'normal',
		'high'
	);

	add_meta_box(
		'businessorange_about',
		__( 'About Section', 'businessorange' ),
		'businessorange_about_callback',
		'page',
		'normal',
		'high'
	);

	add_meta_box(
		'businessorange_services',
		__( 'Services Settings', 'businessorange' ),
		'businessorange_services_callback',
		'page',
		'normal',
		'high'
	);

	add_meta_box(
		'businessorange_pricing',
		__( 'Pricing Plans', 'businessorange' ),
		'businessorange_pricing_callback',
		'page',
		'normal',
		'high'
	);

	add_meta_box(
		'businessorange_clients',
		__( 'Clients Logos', 'businessorange' ),
		'businessorange_clients_callback',
		'page',
		'normal',
		'high'
	);

	add_meta_box(
		'businessorange_contact',
		__( 'Contact Information', 'businessorange' ),
		'businessorange_contact_callback',
		'page',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'businessorange_register_meta_boxes' );

/**
 * Hero Section Meta Box Callback
 */
function businessorange_hero_callback( $post ) {
	wp_nonce_field( 'businessorange_save_meta', 'businessorange_meta_nonce' );
	
	$title = get_post_meta( $post->ID, '_businessorange_hero_title', true );
	$description = get_post_meta( $post->ID, '_businessorange_hero_description', true );
	$button1_text = get_post_meta( $post->ID, '_businessorange_hero_button1_text', true );
	$button1_link = get_post_meta( $post->ID, '_businessorange_hero_button1_link', true );
	$button2_text = get_post_meta( $post->ID, '_businessorange_hero_button2_text', true );
	$button2_link = get_post_meta( $post->ID, '_businessorange_hero_button2_link', true );
	
	?>
	<p><label><strong>Title:</strong><br><input type="text" name="businessorange_hero_title" value="<?php echo esc_attr( $title ); ?>" style="width: 100%;"></label></p>
	<p><label><strong>Description:</strong><br><textarea name="businessorange_hero_description" rows="3" style="width: 100%;"><?php echo esc_textarea( $description ); ?></textarea></label></p>
	<p><label><strong>Button 1 Text:</strong><br><input type="text" name="businessorange_hero_button1_text" value="<?php echo esc_attr( $button1_text ); ?>" style="width: 100%;"></label></p>
	<p><label><strong>Button 1 Link:</strong><br><input type="url" name="businessorange_hero_button1_link" value="<?php echo esc_url( $button1_link ); ?>" style="width: 100%;"></label></p>
	<p><label><strong>Button 2 Text:</strong><br><input type="text" name="businessorange_hero_button2_text" value="<?php echo esc_attr( $button2_text ); ?>" style="width: 100%;"></label></p>
	<p><label><strong>Button 2 Link:</strong><br><input type="url" name="businessorange_hero_button2_link" value="<?php echo esc_url( $button2_link ); ?>" style="width: 100%;"></label></p>
	<?php
}

/**
 * About Section Meta Box Callback
 */
function businessorange_about_callback( $post ) {
	wp_nonce_field( 'businessorange_save_meta', 'businessorange_meta_nonce' );
	
	$who_we_are = get_post_meta( $post->ID, '_businessorange_about_who_we_are', true );
	$vision = get_post_meta( $post->ID, '_businessorange_about_vision', true );
	$history = get_post_meta( $post->ID, '_businessorange_about_history', true );
	
	?>
	<p><label><strong>Who We Are Content:</strong><br><textarea name="businessorange_about_who_we_are" rows="5" style="width: 100%;"><?php echo esc_textarea( $who_we_are ); ?></textarea></label></p>
	<p><label><strong>Vision Content:</strong><br><textarea name="businessorange_about_vision" rows="5" style="width: 100%;"><?php echo esc_textarea( $vision ); ?></textarea></label></p>
	<p><label><strong>History Content:</strong><br><textarea name="businessorange_about_history" rows="5" style="width: 100%;"><?php echo esc_textarea( $history ); ?></textarea></label></p>
	<?php
}

/**
 * Services Meta Box Callback
 */
function businessorange_services_callback( $post ) {
	wp_nonce_field( 'businessorange_save_meta', 'businessorange_meta_nonce' );
	
	$services = get_post_meta( $post->ID, '_businessorange_services', true );
	if ( ! is_array( $services ) ) {
		$services = array();
	}
	
	?>
	<p><strong>Services (6 items)</strong></p>
	<div id="services-container">
		<?php
		for ( $i = 0; $i < 6; $i++ ) {
			$service = isset( $services[ $i ] ) ? $services[ $i ] : array();
			$title = isset( $service['title'] ) ? esc_attr( $service['title'] ) : '';
			$description = isset( $service['description'] ) ? esc_textarea( $service['description'] ) : '';
			$icon = isset( $service['icon'] ) ? esc_url( $service['icon'] ) : '';
			?>
			<div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
				<p><label><strong>Service <?php echo $i + 1; ?> - Title:</strong><br><input type="text" name="businessorange_services[<?php echo $i; ?>][title]" value="<?php echo $title; ?>" style="width: 100%;"></label></p>
				<p><label><strong>Service <?php echo $i + 1; ?> - Description:</strong><br><textarea name="businessorange_services[<?php echo $i; ?>][description]" rows="3" style="width: 100%;"><?php echo $description; ?></textarea></label></p>
				<p><label><strong>Service <?php echo $i + 1; ?> - Icon URL:</strong><br><input type="url" name="businessorange_services[<?php echo $i; ?>][icon]" value="<?php echo $icon; ?>" style="width: 80%;"><button type="button" class="button upload-image">Upload</button></label></p>
			</div>
			<?php
		}
		?>
	</div>
	<?php
}

/**
 * Pricing Meta Box Callback
 */
function businessorange_pricing_callback( $post ) {
	wp_nonce_field( 'businessorange_save_meta', 'businessorange_meta_nonce' );
	
	$plans = get_post_meta( $post->ID, '_businessorange_pricing', true );
	if ( ! is_array( $plans ) ) {
		$plans = array();
	}
	
	$plan_names = array( 'Starter', 'Exclusive', 'Premium' );
	
	?>
	<p><strong>Pricing Plans (3 plans)</strong></p>
	<div id="pricing-container">
		<?php
		for ( $i = 0; $i < 3; $i++ ) {
			$plan = isset( $plans[ $i ] ) ? $plans[ $i ] : array();
			$name = isset( $plan['name'] ) ? esc_attr( $plan['name'] ) : ( isset( $plan_names[ $i ] ) ? $plan_names[ $i ] : '' );
			$price = isset( $plan['price'] ) ? esc_attr( $plan['price'] ) : '';
			$description = isset( $plan['description'] ) ? esc_textarea( $plan['description'] ) : '';
			$features = isset( $plan['features'] ) ? esc_textarea( $plan['features'] ) : '';
			?>
			<div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
				<p><label><strong>Plan <?php echo $i + 1; ?> - Name:</strong><br><input type="text" name="businessorange_pricing[<?php echo $i; ?>][name]" value="<?php echo $name; ?>" style="width: 100%;"></label></p>
				<p><label><strong>Plan <?php echo $i + 1; ?> - Price:</strong><br><input type="text" name="businessorange_pricing[<?php echo $i; ?>][price]" value="<?php echo $price; ?>" style="width: 100%;" placeholder="$0/mo"></label></p>
				<p><label><strong>Plan <?php echo $i + 1; ?> - Description:</strong><br><textarea name="businessorange_pricing[<?php echo $i; ?>][description]" rows="2" style="width: 100%;"><?php echo $description; ?></textarea></label></p>
				<p><label><strong>Plan <?php echo $i + 1; ?> - Features (one per line):</strong><br><textarea name="businessorange_pricing[<?php echo $i; ?>][features]" rows="5" style="width: 100%;"><?php echo $features; ?></textarea></label></p>
			</div>
			<?php
		}
		?>
	</div>
	<?php
}

/**
 * Clients Meta Box Callback
 */
function businessorange_clients_callback( $post ) {
	wp_nonce_field( 'businessorange_save_meta', 'businessorange_meta_nonce' );
	
	$clients = get_post_meta( $post->ID, '_businessorange_clients', true );
	if ( ! is_array( $clients ) ) {
		$clients = array();
	}
	
	?>
	<p><strong>Client Logos (6 items)</strong></p>
	<div id="clients-container">
		<?php
		for ( $i = 0; $i < 6; $i++ ) {
			$logo = isset( $clients[ $i ] ) ? esc_url( $clients[ $i ] ) : '';
			?>
			<div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
				<p><label><strong>Client <?php echo $i + 1; ?> Logo URL:</strong><br><input type="url" name="businessorange_clients[<?php echo $i; ?>]" value="<?php echo $logo; ?>" style="width: 80%;"><button type="button" class="button upload-image">Upload</button></label></p>
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
function businessorange_contact_callback( $post ) {
	wp_nonce_field( 'businessorange_save_meta', 'businessorange_meta_nonce' );
	
	$phone = get_post_meta( $post->ID, '_businessorange_contact_phone', true );
	$email = get_post_meta( $post->ID, '_businessorange_contact_email', true );
	$address = get_post_meta( $post->ID, '_businessorange_contact_address', true );
	$schedule = get_post_meta( $post->ID, '_businessorange_contact_schedule', true );
	
	?>
	<p><label><strong>Phone:</strong><br><input type="text" name="businessorange_contact_phone" value="<?php echo esc_attr( $phone ); ?>" style="width: 100%;"></label></p>
	<p><label><strong>Email:</strong><br><input type="email" name="businessorange_contact_email" value="<?php echo esc_attr( $email ); ?>" style="width: 100%;"></label></p>
	<p><label><strong>Address:</strong><br><textarea name="businessorange_contact_address" rows="3" style="width: 100%;"><?php echo esc_textarea( $address ); ?></textarea></label></p>
	<p><label><strong>Schedule:</strong><br><textarea name="businessorange_contact_schedule" rows="2" style="width: 100%;"><?php echo esc_textarea( $schedule ); ?></textarea></label></p>
	<?php
}

/**
 * Save meta box data
 */
function businessorange_save_meta_boxes( $post_id ) {
	// Check nonce
	if ( ! isset( $_POST['businessorange_meta_nonce'] ) || ! wp_verify_nonce( $_POST['businessorange_meta_nonce'], 'businessorange_save_meta' ) ) {
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

	// Save hero section
	if ( isset( $_POST['businessorange_hero_title'] ) ) {
		update_post_meta( $post_id, '_businessorange_hero_title', sanitize_text_field( $_POST['businessorange_hero_title'] ) );
	}
	if ( isset( $_POST['businessorange_hero_description'] ) ) {
		update_post_meta( $post_id, '_businessorange_hero_description', sanitize_textarea_field( $_POST['businessorange_hero_description'] ) );
	}
	if ( isset( $_POST['businessorange_hero_button1_text'] ) ) {
		update_post_meta( $post_id, '_businessorange_hero_button1_text', sanitize_text_field( $_POST['businessorange_hero_button1_text'] ) );
	}
	if ( isset( $_POST['businessorange_hero_button1_link'] ) ) {
		update_post_meta( $post_id, '_businessorange_hero_button1_link', esc_url_raw( $_POST['businessorange_hero_button1_link'] ) );
	}
	if ( isset( $_POST['businessorange_hero_button2_text'] ) ) {
		update_post_meta( $post_id, '_businessorange_hero_button2_text', sanitize_text_field( $_POST['businessorange_hero_button2_text'] ) );
	}
	if ( isset( $_POST['businessorange_hero_button2_link'] ) ) {
		update_post_meta( $post_id, '_businessorange_hero_button2_link', esc_url_raw( $_POST['businessorange_hero_button2_link'] ) );
	}

	// Save about section
	if ( isset( $_POST['businessorange_about_who_we_are'] ) ) {
		update_post_meta( $post_id, '_businessorange_about_who_we_are', sanitize_textarea_field( $_POST['businessorange_about_who_we_are'] ) );
	}
	if ( isset( $_POST['businessorange_about_vision'] ) ) {
		update_post_meta( $post_id, '_businessorange_about_vision', sanitize_textarea_field( $_POST['businessorange_about_vision'] ) );
	}
	if ( isset( $_POST['businessorange_about_history'] ) ) {
		update_post_meta( $post_id, '_businessorange_about_history', sanitize_textarea_field( $_POST['businessorange_about_history'] ) );
	}

	// Save services
	if ( isset( $_POST['businessorange_services'] ) ) {
		update_post_meta( $post_id, '_businessorange_services', $_POST['businessorange_services'] );
	}

	// Save pricing
	if ( isset( $_POST['businessorange_pricing'] ) ) {
		update_post_meta( $post_id, '_businessorange_pricing', $_POST['businessorange_pricing'] );
	}

	// Save clients
	if ( isset( $_POST['businessorange_clients'] ) ) {
		update_post_meta( $post_id, '_businessorange_clients', $_POST['businessorange_clients'] );
	}

	// Save contact info
	if ( isset( $_POST['businessorange_contact_phone'] ) ) {
		update_post_meta( $post_id, '_businessorange_contact_phone', sanitize_text_field( $_POST['businessorange_contact_phone'] ) );
	}
	if ( isset( $_POST['businessorange_contact_email'] ) ) {
		update_post_meta( $post_id, '_businessorange_contact_email', sanitize_email( $_POST['businessorange_contact_email'] ) );
	}
	if ( isset( $_POST['businessorange_contact_address'] ) ) {
		update_post_meta( $post_id, '_businessorange_contact_address', sanitize_textarea_field( $_POST['businessorange_contact_address'] ) );
	}
	if ( isset( $_POST['businessorange_contact_schedule'] ) ) {
		update_post_meta( $post_id, '_businessorange_contact_schedule', sanitize_textarea_field( $_POST['businessorange_contact_schedule'] ) );
	}
}
add_action( 'save_post', 'businessorange_save_meta_boxes' );

/**
 * Helper function to get theme option
 */
function businessorange_get_option( $post_id, $option_name, $default = '' ) {
	$value = get_post_meta( $post_id, $option_name, true );
	return ! empty( $value ) ? $value : $default;
}

