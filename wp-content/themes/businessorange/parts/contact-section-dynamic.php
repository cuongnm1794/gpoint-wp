<?php
/**
 * Template part for Contact Section with ACF fields
 *
 * @package BusinessOrange
 */

// Get ACF fields from current page
$contact_phone = get_field( 'contact_phone' ) ?: '0984537278623';
$contact_email = get_field( 'contact_email' ) ?: 'yourmail@gmail.com';
$contact_address = get_field( 'contact_address' ) ?: '175 5th Ave, New York, NY 10010\nUnited States';
$contact_schedule = get_field( 'contact_schedule' ) ?: '24 Hours / 7 Days Open\nOffice time: 10 AM - 5:30 PM';
$contact_form_title = get_field( 'contact_form_title' ) ?: 'Ready to Get Started';
$contact_form_description = get_field( 'contact_form_description' ) ?: 'At vero eos et accusamus et iusto odio dignissimos ducimus quiblanditiis praesentium';
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:80px;padding-bottom:80px">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"60px","left":"60px"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"40px"}}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px","fontWeight":"600"},"spacing":{"margin":{"bottom":"30px"}}},"textColor":"dark"} -->
				<h3 class="wp-block-heading has-dark-color has-text-color" style="margin-bottom:30px;font-size:24px;font-weight:600">Contact</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"20px"}}},"textColor":"text-gray"} -->
				<p class="has-text-gray-color has-text-color" style="margin-bottom:20px"><?php echo esc_html( $contact_phone ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"20px"}}},"textColor":"text-gray"} -->
				<p class="has-text-gray-color has-text-color" style="margin-bottom:20px"><?php echo esc_html( $contact_email ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px","fontWeight":"600"},"spacing":{"margin":{"top":"40px","bottom":"30px"}}},"textColor":"dark"} -->
				<h3 class="wp-block-heading has-dark-color has-text-color" style="margin-top:40px;margin-bottom:30px;font-size:24px;font-weight:600">Address</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"20px"}}},"textColor":"text-gray"} -->
				<p class="has-text-gray-color has-text-color" style="margin-bottom:20px"><?php echo nl2br( esc_html( $contact_address ) ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px","fontWeight":"600"},"spacing":{"margin":{"top":"40px","bottom":"30px"}}},"textColor":"dark"} -->
				<h3 class="wp-block-heading has-dark-color has-text-color" style="margin-top:40px;margin-bottom:30px;font-size:24px;font-weight:600">Schedule</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"20px"}}},"textColor":"text-gray"} -->
				<p class="has-text-gray-color has-text-color" style="margin-bottom:20px"><?php echo nl2br( esc_html( $contact_schedule ) ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"30px"}}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"36px","fontWeight":"700"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"dark"} -->
				<h2 class="wp-block-heading has-dark-color has-text-color" style="margin-bottom:20px;font-size:36px;font-weight:700"><?php echo wp_kses_post( $contact_form_title ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"bottom":"30px"}}},"textColor":"text-gray"} -->
				<p class="has-text-gray-color has-text-color" style="margin-bottom:30px;font-size:18px"><?php echo esc_html( $contact_form_description ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:html -->
				<form class="businessorange-contact-form">
					<div style="margin-bottom: 20px;">
						<label style="display: block; margin-bottom: 8px; font-weight: 500; color: #1A1A1A;">Name <span style="color: #0066CC;">*</span></label>
						<input type="text" name="name" required style="width: 100%; padding: 12px; border: 1px solid #E0E0E0; border-radius: 4px; font-size: 16px;" />
					</div>
					<div style="margin-bottom: 20px;">
						<label style="display: block; margin-bottom: 8px; font-weight: 500; color: #1A1A1A;">Email <span style="color: #0066CC;">*</span></label>
						<input type="email" name="email" required style="width: 100%; padding: 12px; border: 1px solid #E0E0E0; border-radius: 4px; font-size: 16px;" />
					</div>
					<div style="margin-bottom: 20px;">
						<label style="display: block; margin-bottom: 8px; font-weight: 500; color: #1A1A1A;">Subject</label>
						<input type="text" name="subject" style="width: 100%; padding: 12px; border: 1px solid #E0E0E0; border-radius: 4px; font-size: 16px;" />
					</div>
					<div style="margin-bottom: 20px;">
						<label style="display: block; margin-bottom: 8px; font-weight: 500; color: #1A1A1A;">Message <span style="color: #0066CC;">*</span></label>
						<textarea name="message" rows="5" required style="width: 100%; padding: 12px; border: 1px solid #E0E0E0; border-radius: 4px; font-size: 16px; resize: vertical;"></textarea>
					</div>
					<button type="submit" style="width: 100%; padding: 16px; background-color: #0066CC; color: white; border: none; border-radius: 4px; font-size: 16px; font-weight: 600; cursor: pointer;">Send Message</button>
				</form>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

