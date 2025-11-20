<?php
/**
 * Title: Contact Form Section
 * Slug: gpoint/contact-form
 * Categories: gpoint
 * Description: Section form đăng ký/liên hệ
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"backgroundColor":"primary-orange","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-orange-background-color has-background" style="padding-top:80px;padding-bottom:80px">
	<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"60px","left":"60px"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"25px"}}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"42px","fontWeight":"700","lineHeight":"1.3"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"white"} -->
				<h2 class="wp-block-heading has-white-color has-text-color" style="margin-bottom:20px;font-size:42px;font-weight:700;line-height:1.3">Hãy để lại thông tin cho chúng tôi</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.8"},"spacing":{"margin":{"bottom":"30px"}}},"textColor":"white"} -->
				<p class="has-white-color has-text-color" style="margin-bottom:30px;font-size:18px;line-height:1.8">Chúng tôi sẽ liên hệ và tư vấn giải pháp cho doanh nghiệp của bạn trong 24 giờ làm việc.</p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"15px"}}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}},"textColor":"white"} -->
					<p class="has-white-color has-text-color" style="font-size:16px">● EMAIL: info@gpoint.vn</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}},"textColor":"white"} -->
					<p class="has-white-color has-text-color" style="font-size:16px">● HOTLINE: +84 24 3512 1928</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"20px","padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}},"border":{"radius":"12px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-white-background-color has-background" style="border-radius:12px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px","fontWeight":"600"},"spacing":{"margin":{"bottom":"25px"}}},"textColor":"dark"} -->
				<h3 class="wp-block-heading has-dark-color has-text-color" style="margin-bottom:25px;font-size:24px;font-weight:600">Đăng ký tư vấn</h3>
				<!-- /wp:heading -->

				<!-- wp:html -->
				<form class="gpoint-contact-form">
					<div style="margin-bottom: 20px;">
						<label style="display: block; margin-bottom: 8px; font-weight: 500; color: #1A1A1A;">Họ và tên <span style="color: #FF6B35;">*</span></label>
						<input type="text" name="name" required style="width: 100%; padding: 12px; border: 1px solid #E0E0E0; border-radius: 4px; font-size: 16px;" />
					</div>
					<div style="margin-bottom: 20px;">
						<label style="display: block; margin-bottom: 8px; font-weight: 500; color: #1A1A1A;">Email <span style="color: #FF6B35;">*</span></label>
						<input type="email" name="email" required style="width: 100%; padding: 12px; border: 1px solid #E0E0E0; border-radius: 4px; font-size: 16px;" />
					</div>
					<div style="margin-bottom: 20px;">
						<label style="display: block; margin-bottom: 8px; font-weight: 500; color: #1A1A1A;">Số điện thoại</label>
						<input type="tel" name="phone" style="width: 100%; padding: 12px; border: 1px solid #E0E0E0; border-radius: 4px; font-size: 16px;" />
					</div>
					<div style="margin-bottom: 20px;">
						<label style="display: block; margin-bottom: 8px; font-weight: 500; color: #1A1A1A;">Tin nhắn</label>
						<textarea name="message" rows="4" style="width: 100%; padding: 12px; border: 1px solid #E0E0E0; border-radius: 4px; font-size: 16px; resize: vertical;"></textarea>
					</div>
					<button type="submit" style="width: 100%; padding: 16px; background-color: #FF6B35; color: white; border: none; border-radius: 4px; font-size: 16px; font-weight: 600; cursor: pointer;">Gửi thông tin</button>
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

