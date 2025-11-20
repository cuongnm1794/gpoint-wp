<?php
/**
 * Template part for Pricing Section with Customizer settings
 *
 * @package GPoint_Business
 */

// Get Customizer settings
$pricing_subtitle = get_theme_mod( 'pricing_subtitle', 'Bảng Giá' );
$pricing_title = get_theme_mod( 'pricing_title', 'GÓI GIÁ PHẦN MỀM DỊCH VỤ G-POINT' );
$pricing_description = get_theme_mod( 'pricing_description', 'Trải nghiệm miễn phí 15 ngày với đầy đủ tính năng của hệ thống G-Point — giúp bạn đánh giá hiệu quả trước khi triển khai thực tế.' );

// Get pricing plans from JSON
$default_plans = array(
	array(
		'name' => 'Gói Cơ Bản',
		'price' => '1.900.000 VND / tháng',
		'description' => 'Giải pháp phù hợp cho doanh nghiệp vừa, giúp quản lý và giám sát hoạt động khuyến mãi hiệu quả trên nhiều điểm bán.',
		'features' => array(
			array( 'text' => '✅ 10 tài khoản User (PG/Sup)' ),
			array( 'text' => '✅ 10 điểm bán hàng' ),
			array( 'text' => '✅ 5.000 khách hàng' ),
			array( 'text' => '✅ 10.000 hóa đơn' ),
			array( 'text' => '✅ Dung lượng lưu trữ 10 GB' ),
		),
		'button_text' => 'ĐĂNG KÝ NGAY',
		'button_link' => 'https://gpoint-dashboard.gapit.com.vn/login',
		'featured' => false,
	),
	array(
		'name' => 'Gói Tiêu Chuẩn',
		'price' => '3.900.000 VND / tháng',
		'description' => 'Gói toàn diện với đầy đủ tính năng quản trị, phù hợp cho thương hiệu triển khai chiến dịch O2O quy mô lớn.',
		'features' => array(
			array( 'text' => '✅ 25 tài khoản User (PG/Sup)' ),
			array( 'text' => '✅ 30 điểm bán hàng' ),
			array( 'text' => '✅ 20.000 khách hàng' ),
			array( 'text' => '✅ 100.000 hóa đơn' ),
			array( 'text' => '✅ Dung lượng lưu trữ 20 GB' ),
		),
		'button_text' => 'ĐĂNG KÝ NGAY',
		'button_link' => 'https://gpoint-dashboard.gapit.com.vn/login',
		'featured' => true,
	),
	array(
		'name' => 'Gói Cao Cấp',
		'price' => '6.900.000 VND / tháng',
		'description' => 'Gói cao cấp dành cho doanh nghiệp lớn, tích hợp hệ thống giám sát và báo cáo nâng cao.',
		'features' => array(
			array( 'text' => '✅ 100 tài khoản User (PG/Sup)' ),
			array( 'text' => '✅ 100 điểm bán hàng' ),
			array( 'text' => '✅ 100.000 khách hàng' ),
			array( 'text' => '✅ 1.000.000 hóa đơn' ),
			array( 'text' => '✅ Dung lượng lưu trữ: 100GB' ),
		),
		'button_text' => 'ĐĂNG KÝ NGAY',
		'button_link' => 'https://gpoint-dashboard.gapit.com.vn/login',
		'featured' => false,
	),
);
$pricing_plans = gpoint_business_get_json_setting( 'pricing_plans', $default_plans );
?>

<!-- wp:group {"tagName":"section","id":"pricing","className":"pricing-area pricing-fourteen","layout":{"type":"default"}} -->
<section id="pricing" class="wp-block-group pricing-area pricing-fourteen">
	<!-- wp:group {"className":"section-title-five","layout":{"type":"default"}} -->
	<div class="wp-block-group section-title-five">
		<!-- wp:group {"className":"container","layout":{"type":"default"}} -->
		<div class="wp-block-group container">
			<!-- wp:group {"className":"row","layout":{"type":"default"}} -->
			<div class="wp-block-group row">
				<!-- wp:group {"className":"col-12","layout":{"type":"default"}} -->
				<div class="wp-block-group col-12">
					<!-- wp:group {"className":"content","layout":{"type":"default"}} -->
					<div class="wp-block-group content">
						<!-- wp:heading {"level":6} -->
						<h6><?php echo esc_html( $pricing_subtitle ); ?></h6>
						<!-- /wp:heading -->

						<!-- wp:heading {"level":2,"className":"fw-bold"} -->
						<h2 class="fw-bold"><?php echo wp_kses_post( $pricing_title ); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p><?php echo esc_html( $pricing_description ); ?></p>
						<!-- /wp:paragraph -->
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

	<!-- wp:group {"className":"container","layout":{"type":"default"}} -->
	<div class="wp-block-group container">
		<!-- wp:columns {"className":"row"} -->
		<div class="wp-block-columns row">
			<?php foreach ( $pricing_plans as $plan ) : 
				$plan_name = isset( $plan['name'] ) ? $plan['name'] : '';
				$plan_price = isset( $plan['price'] ) ? $plan['price'] : '$0/mo';
				$plan_description = isset( $plan['description'] ) ? $plan['description'] : '';
				$plan_features = isset( $plan['features'] ) ? $plan['features'] : array();
				$plan_button_text = isset( $plan['button_text'] ) ? $plan['button_text'] : 'Start free trial';
				$plan_button_link = isset( $plan['button_link'] ) ? $plan['button_link'] : 'https://gpoint-dashboard.gapit.com.vn/login';
				$plan_featured = isset( $plan['featured'] ) && $plan['featured'] ? true : false;
				$plan_class = $plan_featured ? 'pricing-style-fourteen middle' : 'pricing-style-fourteen';
				$button_class = $plan_featured ? 'btn primary-btn' : 'btn primary-btn-outline';
			?>
			<!-- wp:column {"className":"col-lg-4 col-md-6 col-12"} -->
			<div class="wp-block-column col-lg-4 col-md-6 col-12">
				<!-- wp:html -->
				<div class="<?php echo esc_attr( $plan_class ); ?>">
					<div class="table-head">
						<h6 class="title"><?php echo wp_kses_post( $plan_name ); ?></h6>
						<p><?php echo esc_html( $plan_description ); ?></p>
						<div class="price">
							<h2 class="amount"><?php echo wp_kses_post( $plan_price ); ?></h2>
						</div>
					</div>
					<div class="light-rounded-buttons">
						<a target="_blank" href="<?php echo esc_url( $plan_button_link ); ?>" class="<?php echo esc_attr( $button_class ); ?>"><?php echo wp_kses_post( $plan_button_text ); ?></a>
					</div>
					<div class="table-content">
						<ul class="table-list">
							<?php foreach ( $plan_features as $feature ) : 
								$feature_text = isset( $feature['text'] ) ? $feature['text'] : '';
								$feature_active = ! empty( $feature_text ) && strpos( $feature_text, 'deactive' ) === false;
							?>
							<li>
								<i class="lni lni-checkmark-circle<?php echo $feature_active ? '' : ' deactive'; ?>"></i> 
								<?php echo esc_html( str_replace( array( 'deactive', '  ' ), array( '', ' ' ), $feature_text ) ); ?>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<!-- /wp:html -->
			</div>
			<!-- /wp:column -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

