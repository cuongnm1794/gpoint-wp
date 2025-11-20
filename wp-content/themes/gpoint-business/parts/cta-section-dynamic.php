<?php
/**
 * Template part for CTA Section with Customizer settings
 *
 * @package GPoint_Business
 */

// Get Customizer settings
$cta_title = get_theme_mod( 'cta_title', 'Chúng tôi mang đến giải pháp công nghệ giúp doanh nghiệp tối ưu mọi hoạt động khuyến mãi' );
$cta_description = get_theme_mod( 'cta_description', 'Từ quản lý PG/Sup đến giám sát realtime và kết nối dữ liệu giữa các kênh, G-Point giúp thương hiệu triển khai chiến dịch hiệu quả, minh bạch và dễ dàng hơn bao giờ hết.' );
$cta_button_text = get_theme_mod( 'cta_button_text', 'ĐĂNG KÝ NGAY' );
$cta_button_link = get_theme_mod( 'cta_button_link', '#' );

// Convert \n to <br> for title
$cta_title_formatted = nl2br( esc_html( $cta_title ) );
?>

<!-- wp:group {"tagName":"section","id":"call-action","className":"call-action","layout":{"type":"default"}} -->
<section id="call-action" class="wp-block-group call-action">
	<!-- wp:group {"className":"container","layout":{"type":"default"}} -->
	<div class="wp-block-group container">
		<!-- wp:group {"className":"row justify-content-center","layout":{"type":"default"}} -->
		<div class="wp-block-group row justify-content-center">
			<!-- wp:group {"className":"col-xxl-6 col-xl-7 col-lg-8 col-md-9","layout":{"type":"default"}} -->
			<div class="wp-block-group col-xxl-6 col-xl-7 col-lg-8 col-md-9">
				<!-- wp:group {"className":"inner-content","layout":{"type":"default"}} -->
				<div class="wp-block-group inner-content">
					<!-- wp:heading {"level":2} -->
					<h2><?php echo wp_kses_post( $cta_title_formatted ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p><?php echo esc_html( $cta_description ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"className":"light-rounded-buttons","layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-group light-rounded-buttons">
						<!-- wp:html -->
						<?php if ( $cta_button_text && $cta_button_link ) : ?>
						<a href="<?php echo esc_url( $cta_button_link ); ?>" class="btn primary-btn-outline"><?php echo wp_kses_post( $cta_button_text ); ?></a>
						<?php endif; ?>
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

