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
	// Log để verify function được gọi
	error_log( '[SMTP] gpoint_business_configure_smtp được gọi' );
	
	// SMTP Server Settings
	$phpmailer->isSMTP();
	$phpmailer->Host       = 'gpoint.com.vn';
	$phpmailer->Port       = 587;
	$phpmailer->SMTPSecure = 'tls'; // Use TLS encryption
	$phpmailer->SMTPAuth   = true;
	
	// SMTP Credentials
	$phpmailer->Username = 'noreply@gpoint.com.vn';
	$phpmailer->Password = 'gtyLm3d9KK5qvzSeC5NW'; // Replace with actual password
	
	// Set From address
	$phpmailer->From     = 'noreply@gpoint.com.vn';
	$phpmailer->FromName = get_bloginfo( 'name' );
	
	// Bật debug SMTP để xem chi tiết
	$phpmailer->SMTPDebug  = 2; // 0 = off, 1 = client, 2 = client + server
	$phpmailer->Debugoutput = function( $str ) {
		error_log( '[SMTP Debug] ' . $str );
	};
	
	error_log( '[SMTP] Config applied: Host=' . $phpmailer->Host . ', Port=' . $phpmailer->Port . ', Username=' . $phpmailer->Username );
}
add_action( 'phpmailer_init', 'gpoint_business_configure_smtp' );

/**
 * Test SMTP function - truy cập ?test_smtp=1 để test
 */
function gpoint_business_test_smtp() {
	if ( isset( $_GET['test_smtp'] ) && current_user_can( 'manage_options' ) ) {
		error_log( '[SMTP Test] Bắt đầu test gửi mail...' );
		
		$to = 'cuongnm1794@gmail.com'; // Đổi thành email của bạn để nhận test
		$subject = 'Test SMTP từ GPoint Business';
		$message = 'Đây là email test SMTP. Nếu nhận được email này thì SMTP đã hoạt động.';
		$headers = array( 'Content-Type: text/plain; charset=UTF-8' );
		
		$result = wp_mail( $to, $subject, $message, $headers );
		
		if ( $result ) {
			error_log( '[SMTP Test] wp_mail() trả về TRUE - Email đã được gửi' );
			wp_die( '<h1>✓ Email đã gửi thành công!</h1><p>Kiểm tra email ' . esc_html( $to ) . ' và wp-content/debug.log để xem chi tiết.</p>' );
		} else {
			error_log( '[SMTP Test] wp_mail() trả về FALSE - Có lỗi xảy ra' );
			wp_die( '<h1>✗ Lỗi gửi email</h1><p>Kiểm tra wp-content/debug.log để xem chi tiết lỗi.</p>' );
		}
	}
}
add_action( 'init', 'gpoint_business_test_smtp' );
