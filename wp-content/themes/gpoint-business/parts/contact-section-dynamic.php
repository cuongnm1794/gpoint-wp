<?php
/**
 * Template part for Contact Section with Customizer settings
 *
 * @package GPoint_Business
 */

// Get Customizer settings
$contact_phone = get_theme_mod( 'contact_phone', '024 3512 1928' );
$contact_email = get_theme_mod( 'contact_email', 'info@gapit.com.vn' );
$contact_address = get_theme_mod( 'contact_address', 'Văn phòng Hà Nội:\nPhòng 2106, Tầng 21, Số 459C Bạch Mai, Phường Bạch Mai, Thành phố Hà Nội\n\nVăn phòng TP. Hồ Chí Minh:\nTầng 2, Tòa nhà Sông Đà, 14B Kỳ Đồng, Phường Nhiêu Lộc, Thành phố Hồ Chí Minh\n\nVăn phòng Myanmar:\nSố 9, Tầng 2, Đường Shwe Taung Tan, Yangon, Myanmar' );
$contact_schedule = get_theme_mod( 'contact_schedule', '24 Giờ / 7 ngày mở\nVăn Phòng : 8 AM - 5:30 PM' );
$contact_form_title = get_theme_mod( 'contact_form_title', 'Sẵn sàng để bắt đầu' );
$contact_form_description = get_theme_mod( 'contact_form_description', 'Hãy để lại thông tin, đội ngũ GAPIT sẽ phản hồi trong 24 giờ.\nTặng demo & dùng thử miễn phí 15 ngày.' );
$contact_form_7_shortcode = get_theme_mod( 'contact_form_7_shortcode', '' );

// Split address into lines
$address_lines = explode( '\n\n', $contact_address );
$schedule_lines = explode( '\n', $contact_schedule );

// Check if Contact Form 7 is active and shortcode is provided
$use_cf7 = ! empty( $contact_form_7_shortcode ) && ( function_exists( 'wpcf7' ) || class_exists( 'WPCF7_ContactForm' ) );
?>

<!-- wp:group {"tagName":"section","id":"contact","className":"contact-section","layout":{"type":"default"}} -->
<section id="contact" class="wp-block-group contact-section">
	<!-- wp:group {"className":"container","layout":{"type":"default"}} -->
	<div class="wp-block-group container">
		<!-- wp:columns {"className":"row"} -->
		<div class="wp-block-columns row">
			<!-- wp:column {"className":"col-xl-4"} -->
			<div class="wp-block-column col-xl-4">
				<!-- wp:group {"className":"contact-item-wrapper","layout":{"type":"default"}} -->
				<div class="wp-block-group contact-item-wrapper">
					<!-- wp:html -->
					<div class="row">
						<div class="col-12 col-md-6 col-xl-12">
							<div class="contact-item">
								<div class="contact-icon" style="width: 50px !important">
									<i class="lni lni-phone"></i>
								</div>
								<div class="contact-content">
									<h4>Thông tin liên hệ</h4>
									<p><?php echo esc_html( $contact_phone ); ?></p>
									<p><?php echo esc_html( $contact_email ); ?></p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xl-12">
							<div class="contact-item">
								<div class="contact-icon" style="width: 50px !important">
									<i class="lni lni-map-marker"></i>
								</div>
								<div class="contact-content">
									<h4>Địa chỉ</h4>
									<?php foreach ( $address_lines as $key=> $line  ) : ?>
										<p ><?php echo trim( str_replace( '\n', '<br/>', $line ) ); ?></p>
											<br/>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xl-12">
							<div class="contact-item">
								<div class="contact-icon" style="width: 50px !important">
									<i class="lni lni-alarm-clock"></i>
								</div>
								<div class="contact-content">
									<h4>Thời gian hoạt động</h4>
									<?php foreach ( $schedule_lines as $line ) : ?>
										<p><?php echo esc_html( trim( $line ) ); ?></p>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					</div>
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"col-xl-8"} -->
			<div class="wp-block-column col-xl-8">
				<!-- wp:group {"className":"contact-form-wrapper","layout":{"type":"default"}} -->
				<div class="wp-block-group contact-form-wrapper">
					<!-- wp:group {"className":"row","layout":{"type":"default"}} -->
					<div class="wp-block-group row">
						<!-- wp:group {"className":"col-xl-10 col-lg-8 mx-auto","layout":{"type":"default"}} -->
						<div class="wp-block-group col-xl-10 col-lg-8 mx-auto">
							<!-- wp:group {"className":"section-title text-center","layout":{"type":"default"}} -->
							<div class="wp-block-group section-title text-center">
								<!-- wp:paragraph -->
								<p><span> Get in Touch </span></p>
								<!-- /wp:paragraph -->

								<!-- wp:heading {"level":2} -->
								<h2><?php echo wp_kses_post( $contact_form_title ); ?></h2>
								<!-- /wp:heading -->

								<!-- wp:paragraph -->
								<p><?php echo esc_html( $contact_form_description ); ?></p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->

					<!-- wp:html -->
					<?php if ( $use_cf7 ) : ?>
						<!-- Contact Form 7 -->
						<div class="contact-form-7-wrapper">
							<?php echo do_shortcode( $contact_form_7_shortcode ); ?>
						</div>
					<?php else : ?>
						<!-- Default HTML Form -->
						<form action="#" class="contact-form" id="gpoint-contact-form">
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="name" id="contact-name" placeholder="Họ và tên" required />
								</div>
								<div class="col-md-6">
									<input type="email" name="email" id="contact-email" placeholder="Email" required />
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="phone" id="contact-phone" placeholder="Số điện thoại" required />
								</div>
								<div class="col-md-6">
									<input type="text" name="subject" id="contact-subject" placeholder="Tiêu đề" required />
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<textarea name="message" id="contact-message" placeholder="Nội dung" rows="5" required></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="button text-center rounded-buttons">
										<button type="submit" class="btn primary-btn rounded-full" id="contact-submit-btn">GỬI TIN NHẮN</button>
									</div>
								</div>
							</div>
						</form>
					<?php endif; ?>
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- Thank You Modal -->
<!-- wp:html -->
<div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: none; padding-bottom: 0;">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body text-center" style="padding: 2rem;">
				<div class="thank-you-icon" style="font-size: 64px; color: var(--success); margin-bottom: 1rem;">
					<i class="lni lni-checkmark-circle"></i>
				</div>
				<h3 class="modal-title" id="thankYouModalLabel" style="margin-bottom: 1rem; color: var(--black);">Cảm ơn bạn!</h3>
				<p class="thank-you-message" style="color: var(--gray-1); margin-bottom: 0;">
					Cảm ơn bạn đã liên hệ với chúng tôi. Chúng tôi sẽ phản hồi sớm nhất có thể.
				</p>
			</div>
			<div class="modal-footer" style="border-top: none; justify-content: center; padding-top: 0;">
				<button type="button" class="btn primary-btn" data-bs-dismiss="modal">Đóng</button>
			</div>
		</div>
	</div>
</div>
<!-- /wp:html -->

