<?php
/**
 * SMTP Configuration for Email Sending
 * 
 * Configures WordPress to use SMTP server for sending emails
 *
 * @package GPoint_Business
 * @since GPoint Business 1.0.0
 */

/**
 * Configure SMTP settings
 * Hook into phpmailer_init to configure SMTP
 */
function gpoint_business_configure_smtp( $phpmailer ) {
	// SMTP Server Settings
	$phpmailer->isSMTP();
	$phpmailer->Host       = 'mail.gpoint.com.vn';
	$phpmailer->Port       = 587;
	$phpmailer->SMTPSecure = 'tls'; // Use TLS encryption
	$phpmailer->SMTPAuth   = true;
	
	// SMTP Credentials
	$phpmailer->Username = 'noreply@gpoint.com.vn';
	$phpmailer->Password = 'gtyLm3d9KK5qvzSeC5NW'; // Replace with actual password
	
	// Set From address
	$phpmailer->From     = 'noreply@gpoint.com.vn';
	$phpmailer->FromName = get_bloginfo( 'name' );
}
add_action( 'phpmailer_init', 'gpoint_business_configure_smtp' );
