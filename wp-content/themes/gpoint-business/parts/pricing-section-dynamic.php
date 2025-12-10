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
			array( 'text' => '10 tài khoản User (PG/Sup)' ),
			array( 'text' => '10 điểm bán hàng' ),
			array( 'text' => '5.000 khách hàng' ),
			array( 'text' => '10.000 hóa đơn' ),
			array( 'text' => 'Dung lượng lưu trữ 10 GB' ),
		),
		'button_text' => 'ĐĂNG KÝ NGAY',
		'button_link' => '#contact',
		'featured' => false,
	),
	array(
		'name' => 'Gói Tiêu Chuẩn',
		'price' => '3.900.000 VND / tháng',
		'description' => 'Gói toàn diện với đầy đủ tính năng quản trị, phù hợp cho thương hiệu triển khai chiến dịch O2O quy mô lớn.',
		'features' => array(
			array( 'text' => '25 tài khoản User (PG/Sup)' ),
			array( 'text' => '30 điểm bán hàng' ),
			array( 'text' => '20.000 khách hàng' ),
			array( 'text' => '100.000 hóa đơn' ),
			array( 'text' => 'Dung lượng lưu trữ 20 GB' ),
		),
		'button_text' => 'ĐĂNG KÝ NGAY',
		'button_link' => '#contact',
		'featured' => true,
	),
	array(
		'name' => 'Gói Cao Cấp',
		'price' => '6.900.000 VND / tháng',
		'description' => 'Gói cao cấp dành cho doanh nghiệp lớn, tích hợp hệ thống giám sát và báo cáo nâng cao.',
		'features' => array(
			array( 'text' => '100 tài khoản User (PG/Sup)' ),
			array( 'text' => '100 điểm bán hàng' ),
			array( 'text' => '100.000 khách hàng' ),
			array( 'text' => '1.000.000 hóa đơn' ),
			array( 'text' => 'Dung lượng lưu trữ: 100GB' ),
		),
		'button_text' => 'ĐĂNG KÝ NGAY',
		'button_link' => '#contact',
		'featured' => false,
	),
	array(
		'name' => 'On-Demand Project',
		'price' => 'Từ 25 triệu / chiến dịch',
		'description' => 'Giải pháp linh hoạt cho chiến dịch riêng lẻ, hỗ trợ onboard, training, report & dashboard.',
		'features' => array(
			array( 'text' => 'Tính phí theo chiến dịch' ),
			array( 'text' => 'Setup & cấu hình' ),
			array( 'text' => 'Đào tạo team' ),
			array( 'text' => 'Report & Dashboard' ),
			array( 'text' => 'Hỗ trợ technical' ),
		),
		'button_text' => 'LIÊN HỆ TƯ VẤN',
		'button_link' => '#contact',
		'featured' => false,
	),
	array(
		'name' => 'Add-On Services',
		'price' => 'Tùy chọn module',
		'description' => 'Các tính năng nâng cao theo yêu cầu để mở rộng khả năng của hệ thống.',
		'features' => array(
			array( 'text' => 'White-label (logo agency)' ),
			array( 'text' => 'Lucky Draw Engine' ),
			array( 'text' => 'POSM checklist module' ),
			array( 'text' => 'Loyalty voucher API' ),
			array( 'text' => 'Private Cloud hosting' ),
		),
		'button_text' => 'TÌM HIỂU THÊM',
		'button_link' => '#contact',
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

						<!-- wp:paragraph {"align":"center","className":"mt-3"} -->
						<p class="has-text-align-center mt-3">
							<a href="https://drive.google.com/file/d/1-WMy-Gyxzhe3eUTVoDRVPSa7S6WzdLEf/view?usp=sharing" target="_blank" class="btn btn-secondary" style="display: inline-block; padding: 10px 25px; margin-top: 10px; text-decoration: none; border-radius: 5px;">
								📄 Xem Bảng Giá Chi Tiết (PDF)
							</a>
						</p>
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
		<!-- wp:html -->
		<style>
			.pricing-area.pricing-fourteen .pricing-cards-wrapper {
				display: flex;
				flex-direction: column;
				gap: 40px;
			}
			
			.pricing-area.pricing-fourteen .pricing-row {
				display: flex;
				flex-wrap: wrap;
				gap: 20px;
				justify-content: center;
			}
			
			.pricing-area.pricing-fourteen .pricing-card-wrapper {
				flex: 1 1 calc(33.333% - 20px);
				min-width: 300px;
				max-width: 380px;
			}
			
			.pricing-area.pricing-fourteen .pricing-row.secondary-plans .pricing-card-wrapper {
				flex: 1 1 calc(50% - 20px);
				max-width: 500px;
			}
			
			.pricing-area.pricing-fourteen .pricing-style-fourteen {
				height: 100%;
				display: flex;
				flex-direction: column;
				background: #ffffff;
				border-radius: 16px;
				box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
				transition: all 0.3s ease;
				border: 2px solid transparent;
				overflow: hidden;
			}
			
			.pricing-area.pricing-fourteen .pricing-style-fourteen:hover {
				transform: translateY(-8px);
				box-shadow: 0 12px 40px rgba(0, 0, 0, 0.12);
			}
			
			.pricing-area.pricing-fourteen .table-head .title {
				font-size: 20px;
				font-weight: 700;
				margin-bottom: 12px;
			}
			
			.pricing-area.pricing-fourteen .table-head p {
				font-size: 14px;
				line-height: 1.6;
				color: #6c757d;
				margin-bottom: 20px;
				min-height: 90px;
			}
			
			.pricing-area.pricing-fourteen .price {
				margin-top: 16px;
			}
			
			.pricing-area.pricing-fourteen .price .amount {
				font-size: 32px;
				line-height: 1.2;
			}
			
			.pricing-area.pricing-fourteen .light-rounded-buttons {
				padding: 24px 28px;
			}
			
			.pricing-area.pricing-fourteen .light-rounded-buttons a {
				display: block;
				width: 100%;
				padding: 14px 24px;
				border-radius: 8px;
				font-weight: 600;
				font-size: 15px;
				text-align: center;
				text-decoration: none;
				transition: all 0.3s ease;
			}
			
			.pricing-area.pricing-fourteen .btn.primary-btn-outline {
				background: transparent;
			}
			
			
			
			.pricing-area.pricing-fourteen .btn.primary-btn {
				color: white;
			}
			
			.pricing-area.pricing-fourteen .btn.primary-btn:hover {
				background: #0a58ca;
				border-color: #0a58ca;
			}
			
			.pricing-area.pricing-fourteen .table-content {
				padding: 0 28px 32px;
				flex-grow: 1;
			}
			
			.pricing-area.pricing-fourteen .table-list {
				list-style: none;
				padding: 0;
				margin: 0;
			}
			
			.pricing-area.pricing-fourteen .table-list li {
				padding: 10px 0;
				font-size: 14px;
				color: #495057;
				display: flex;
				align-items: flex-start;
				line-height: 1.6;
			}
			
			.pricing-area.pricing-fourteen .table-list li i {
				margin-right: 10px;
				color: #28a745;
				font-size: 18px;
				flex-shrink: 0;
				margin-top: 2px;
			}
			
			.pricing-area.pricing-fourteen .table-list li i.deactive {
				color: #dee2e6;
			}
			
			@media (max-width: 991px) {
				.pricing-area.pricing-fourteen .pricing-card-wrapper {
					flex: 1 1 calc(50% - 20px);
				}
			}
			
			@media (max-width: 767px) {
				.pricing-area.pricing-fourteen .pricing-card-wrapper,
				.pricing-area.pricing-fourteen .pricing-row.secondary-plans .pricing-card-wrapper {
					flex: 1 1 100%;
					max-width: 100%;
				}
			}
		</style>
		
		<div class="pricing-cards-wrapper">
			<!-- Main Pricing Plans (3 columns) -->
			<div class="pricing-row main-plans">
				<?php 
				$main_plans = array_slice($pricing_plans, 0, 3);
				foreach ( $main_plans as $plan ) : 
					$plan_name = isset( $plan['name'] ) ? $plan['name'] : '';
					$plan_price = isset( $plan['price'] ) ? $plan['price'] : '$0/mo';
					$plan_description = isset( $plan['description'] ) ? $plan['description'] : '';
					$plan_features = isset( $plan['features'] ) ? $plan['features'] : array();
					$plan_button_text = isset( $plan['button_text'] ) ? $plan['button_text'] : 'Start free trial';
					$plan_button_link = isset( $plan['button_link'] ) ? $plan['button_link'] : '#contact';
					$plan_featured = isset( $plan['featured'] ) && $plan['featured'] ? true : false;
					$plan_class = $plan_featured ? 'pricing-style-fourteen middle' : 'pricing-style-fourteen';
					$button_class = $plan_featured ? 'btn primary-btn' : 'btn primary-btn-outline';
				?>
				<div class="pricing-card-wrapper">
					<div class="<?php echo esc_attr( $plan_class ); ?>">
						<div class="table-head">
							<h6 class="title"><?php echo wp_kses_post( $plan_name ); ?></h6>
							<p><?php echo esc_html( $plan_description ); ?></p>
							<div class="price">
								<h3 class="amount"><?php echo wp_kses_post( $plan_price ); ?></h3>
							</div>
						</div>
						<div class="light-rounded-buttons">
							<a href="<?php echo esc_url( $plan_button_link ); ?>" class="<?php echo esc_attr( $button_class ); ?>"><?php echo wp_kses_post( $plan_button_text ); ?></a>
						</div>
						<div class="table-content">
							<ul class="table-list">
								<?php foreach ( $plan_features as $feature ) : 
									$feature_text = isset( $feature['text'] ) ? $feature['text'] : '';
									$feature_active = ! empty( $feature_text ) && strpos( $feature_text, 'deactive' ) === false;
								?>
								<li>
									<i class="lni lni-checkmark-circle<?php echo $feature_active ? '' : ' deactive'; ?>"></i> 
									<span><?php echo esc_html( str_replace( array( 'deactive', '  ' ), array( '', ' ' ), $feature_text ) ); ?></span>
								</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
			
			<!-- Secondary Plans (2 columns) -->
			<div class="pricing-row secondary-plans">
				<?php 
				$secondary_plans = array_slice($pricing_plans, 3);
				foreach ( $secondary_plans as $plan ) : 
					$plan_name = isset( $plan['name'] ) ? $plan['name'] : '';
					$plan_price = isset( $plan['price'] ) ? $plan['price'] : '$0/mo';
					$plan_description = isset( $plan['description'] ) ? $plan['description'] : '';
					$plan_features = isset( $plan['features'] ) ? $plan['features'] : array();
					$plan_button_text = isset( $plan['button_text'] ) ? $plan['button_text'] : 'Start free trial';
					$plan_button_link = isset( $plan['button_link'] ) ? $plan['button_link'] : '#contact';
					$plan_featured = isset( $plan['featured'] ) && $plan['featured'] ? true : false;
					$plan_class = $plan_featured ? 'pricing-style-fourteen middle' : 'pricing-style-fourteen';
					$button_class = $plan_featured ? 'btn primary-btn' : 'btn primary-btn-outline';
				?>
				<div class="pricing-card-wrapper">
					<div class="<?php echo esc_attr( $plan_class ); ?>">
						<div class="table-head">
							<h6 class="title"><?php echo wp_kses_post( $plan_name ); ?></h6>
							<p><?php echo esc_html( $plan_description ); ?></p>
							<div class="price">
								<h3 class="amount"><?php echo wp_kses_post( $plan_price ); ?></h3>
							</div>
						</div>
						<div class="light-rounded-buttons">
							<a href="<?php echo esc_url( $plan_button_link ); ?>" class="<?php echo esc_attr( $button_class ); ?>"><?php echo wp_kses_post( $plan_button_text ); ?></a>
						</div>
						<div class="table-content">
							<ul class="table-list">
								<?php foreach ( $plan_features as $feature ) : 
									$feature_text = isset( $feature['text'] ) ? $feature['text'] : '';
									$feature_active = ! empty( $feature_text ) && strpos( $feature_text, 'deactive' ) === false;
								?>
								<li>
									<i class="lni lni-checkmark-circle<?php echo $feature_active ? '' : ' deactive'; ?>"></i> 
									<span><?php echo esc_html( str_replace( array( 'deactive', '  ' ), array( '', ' ' ), $feature_text ) ); ?></span>
								</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

