<?php
/**
 * Contact Form Handler
 * 
 * Handles contact form submissions, saves to database, and shows thank you modal
 *
 * @package GPoint_Business
 * @since GPoint Business 1.0.0
 */

/**
 * Register Custom Post Type for Contact Submissions
 */
function gpoint_business_register_contact_submissions() {
	$labels = array(
		'name'               => __( 'Contact Submissions', 'gpoint-business' ),
		'singular_name'      => __( 'Contact Submission', 'gpoint-business' ),
		'menu_name'          => __( 'Contact Submissions', 'gpoint-business' ),
		'add_new'            => __( 'Add New', 'gpoint-business' ),
		'add_new_item'       => __( 'Add New Submission', 'gpoint-business' ),
		'edit_item'          => __( 'Edit Submission', 'gpoint-business' ),
		'new_item'           => __( 'New Submission', 'gpoint-business' ),
		'view_item'          => __( 'View Submission', 'gpoint-business' ),
		'search_items'       => __( 'Search Submissions', 'gpoint-business' ),
		'not_found'          => __( 'No submissions found', 'gpoint-business' ),
		'not_found_in_trash' => __( 'No submissions found in Trash', 'gpoint-business' ),
	);

	$args = array(
		'labels'              => $labels,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-email-alt',
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'supports'            => array( 'title', 'editor' ),
		'has_archive'         => false,
		'rewrite'             => false,
		'query_var'           => false,
		'can_export'          => true,
		'show_in_rest'        => false,
	);

	register_post_type( 'contact_submission', $args );
}
add_action( 'init', 'gpoint_business_register_contact_submissions' );

/**
 * Add custom columns to Contact Submissions admin
 */
function gpoint_business_contact_submissions_columns( $columns ) {
	$new_columns = array();
	$new_columns['cb'] = $columns['cb'];
	$new_columns['title'] = __( 'Name', 'gpoint-business' );
	$new_columns['email'] = __( 'Email', 'gpoint-business' );
	$new_columns['phone'] = __( 'Phone', 'gpoint-business' );
	$new_columns['subject'] = __( 'Subject', 'gpoint-business' );
	$new_columns['date'] = $columns['date'];
	return $new_columns;
}
add_filter( 'manage_contact_submission_posts_columns', 'gpoint_business_contact_submissions_columns' );

/**
 * Display custom column content
 */
function gpoint_business_contact_submissions_column_content( $column, $post_id ) {
	switch ( $column ) {
		case 'email':
			echo esc_html( get_post_meta( $post_id, '_contact_email', true ) );
			break;
		case 'phone':
			echo esc_html( get_post_meta( $post_id, '_contact_phone', true ) );
			break;
		case 'subject':
			echo esc_html( get_post_meta( $post_id, '_contact_subject', true ) );
			break;
	}
}
add_action( 'manage_contact_submission_posts_custom_column', 'gpoint_business_contact_submissions_column_content', 10, 2 );

/**
 * Handle AJAX contact form submission
 */
function gpoint_business_handle_contact_form_ajax() {
	// Verify nonce
	if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( $_POST['nonce'], 'gpoint_contact_form' ) ) {
		wp_send_json_error( array( 'message' => __( 'Security check failed', 'gpoint-business' ) ) );
	}

	// Sanitize input
	$name = isset( $_POST['name'] ) ? sanitize_text_field( $_POST['name'] ) : '';
	$email = isset( $_POST['email'] ) ? sanitize_email( $_POST['email'] ) : '';
	$phone = isset( $_POST['phone'] ) ? sanitize_text_field( $_POST['phone'] ) : '';
	$subject = isset( $_POST['subject'] ) ? sanitize_text_field( $_POST['subject'] ) : '';
	$message = isset( $_POST['message'] ) ? sanitize_textarea_field( $_POST['message'] ) : '';

	// Validate required fields
	if ( empty( $name ) || empty( $email ) || empty( $phone ) || empty( $subject ) || empty( $message ) ) {
		wp_send_json_error( array( 'message' => __( 'Vui lòng điền đầy đủ thông tin', 'gpoint-business' ) ) );
	}

	// Validate email
	if ( ! is_email( $email ) ) {
		wp_send_json_error( array( 'message' => __( 'Email không hợp lệ', 'gpoint-business' ) ) );
	}

	// Save to database
	$post_data = array(
		'post_title'   => $name . ' - ' . $subject,
		'post_content' => $message,
		'post_status'  => 'publish',
		'post_type'    => 'contact_submission',
	);

	$post_id = wp_insert_post( $post_data );

	if ( is_wp_error( $post_id ) ) {
		wp_send_json_error( array( 'message' => __( 'Có lỗi xảy ra khi lưu thông tin', 'gpoint-business' ) ) );
	}

	// Save meta data
	update_post_meta( $post_id, '_contact_email', $email );
	update_post_meta( $post_id, '_contact_phone', $phone );
	update_post_meta( $post_id, '_contact_subject', $subject );
	update_post_meta( $post_id, '_contact_name', $name );

	// Send email notification (optional)
	$admin_email = get_option( 'admin_email' );
	$contact_email = get_theme_mod( 'contact_email', $admin_email );
	
	$email_subject = sprintf( __( 'Liên hệ mới từ %s', 'gpoint-business' ), get_bloginfo( 'name' ) );
	$email_message = sprintf(
		__( "Bạn có một liên hệ mới:\n\nTên: %s\nEmail: %s\nĐiện thoại: %s\nTiêu đề: %s\n\nNội dung:\n%s", 'gpoint-business' ),
		$name,
		$email,
		$phone,
		$subject,
		$message
	);

	wp_mail( $contact_email, $email_subject, $email_message );

	wp_send_json_success( array( 
		'message' => __( 'Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi sớm nhất có thể.', 'gpoint-business' )
	) );
}
add_action( 'wp_ajax_gpoint_contact_form', 'gpoint_business_handle_contact_form_ajax' );
add_action( 'wp_ajax_nopriv_gpoint_contact_form', 'gpoint_business_handle_contact_form_ajax' );

/**
 * Hook into Contact Form 7 to save submissions and show modal
 */
function gpoint_business_cf7_save_submission( $contact_form ) {
	$submission = WPCF7_Submission::get_instance();
	
	if ( $submission ) {
		$posted_data = $submission->get_posted_data();
		
		// Extract data from CF7 form
		$name = isset( $posted_data['your-name'] ) ? $posted_data['your-name'] : ( isset( $posted_data['name'] ) ? $posted_data['name'] : '' );
		$email = isset( $posted_data['your-email'] ) ? $posted_data['your-email'] : ( isset( $posted_data['email'] ) ? $posted_data['email'] : '' );
		$phone = isset( $posted_data['your-phone'] ) ? $posted_data['your-phone'] : ( isset( $posted_data['phone'] ) ? $posted_data['phone'] : '' );
		$subject = isset( $posted_data['your-subject'] ) ? $posted_data['your-subject'] : ( isset( $posted_data['subject'] ) ? $posted_data['subject'] : '' );
		$message = isset( $posted_data['your-message'] ) ? $posted_data['your-message'] : ( isset( $posted_data['message'] ) ? $posted_data['message'] : '' );

		if ( ! empty( $name ) && ! empty( $email ) ) {
			// Save to database
			$post_data = array(
				'post_title'   => $name . ' - ' . ( $subject ? $subject : __( 'Liên hệ', 'gpoint-business' ) ),
				'post_content' => $message,
				'post_status'  => 'publish',
				'post_type'    => 'contact_submission',
			);

			$post_id = wp_insert_post( $post_data );

			if ( ! is_wp_error( $post_id ) ) {
				update_post_meta( $post_id, '_contact_email', $email );
				update_post_meta( $post_id, '_contact_phone', $phone );
				update_post_meta( $post_id, '_contact_subject', $subject );
				update_post_meta( $post_id, '_contact_name', $name );
				update_post_meta( $post_id, '_cf7_form_id', $contact_form->id() );
			}
		}
	}
}
add_action( 'wpcf7_mail_sent', 'gpoint_business_cf7_save_submission' );

