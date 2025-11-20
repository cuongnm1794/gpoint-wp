<?php
/**
 * Template part for Services Section with Customizer settings
 *
 * @package GPoint_Business
 */

// Get Customizer settings
$services_subtitle = get_theme_mod( 'services_subtitle', 'Tính năng' );
$services_title = get_theme_mod( 'services_title', 'Tính năng nổi bật' );
$services_description = get_theme_mod( 'services_description', 'G-Point giúp doanh nghiệp kiểm soát, tối ưu và nâng cao hiệu quả mọi hoạt động khuyến mãi O2O' );

// Get services list from JSON
$default_services = array(
	array( 'icon_class' => 'lni lni-dashboard', 'title' => 'Giám Sát Realtime', 'description' => 'Theo dõi hoạt động của PG/Sup trực tiếp tại điểm bán với dữ liệu thời gian thực – giúp kiểm soát và điều chỉnh chiến dịch tức thì.' ),
	array( 'icon_class' => 'lni lni-checkmark-circle', 'title' => 'Minh Bạch Dữ Liệu', 'description' => 'Mọi hoạt động đều có bằng chứng xác thực (ảnh, GPS, thời gian check-in/out) – loại bỏ báo cáo sai lệch và tăng độ tin cậy.' ),
	array( 'icon_class' => 'lni lni-layers', 'title' => 'Nền Tảng Kết Nối Thống Nhất', 'description' => 'PG, Supervisor và Client được đồng bộ trên một hệ thống duy nhất – giảm phân mảnh và tăng hiệu quả phối hợp.' ),
	array( 'icon_class' => 'lni lni-bolt', 'title' => 'Hiệu Quả Kích Hoạt Cao', 'description' => 'Toàn bộ dữ liệu từ phát quà, tham gia, đến phản hồi người dùng đều được ghi nhận tự động – giúp đo lường ROI chính xác.' ),
	array( 'icon_class' => 'lni lni-money-protection', 'title' => 'Tối Ưu Chi Phí Quản Lý', 'description' => 'Báo cáo realtime giúp thương hiệu giảm nhu cầu giám sát trực tiếp, cắt giảm chi phí vận hành và thất thoát ngân sách.' ),
	array( 'icon_class' => 'lni lni-database', 'title' => 'Dữ Liệu Tập Trung – Phân Tích Dễ Dàng', 'description' => 'Tất cả dữ liệu khách hàng, hình ảnh, giao dịch được lưu trên một nền tảng – dễ dàng tích hợp CRM và hỗ trợ hoạch định chiến lược dài hạn.' ),
);
$services_list = gpoint_business_get_json_setting( 'services_list', $default_services );
?>

<!-- wp:group {"tagName":"section","id":"services","className":"services-area services-eight","layout":{"type":"default"}} -->
<section id="services" class="wp-block-group services-area services-eight">
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
						<h6><?php echo esc_html( $services_subtitle ); ?></h6>
						<!-- /wp:heading -->

						<!-- wp:heading {"level":2,"className":"fw-bold"} -->
						<h2 class="fw-bold"><?php echo wp_kses_post( $services_title ); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p><?php echo esc_html( $services_description ); ?></p>
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
		<div class="row">
			<?php foreach ( $services_list as $service ) : 
				$service_icon_class = isset( $service['icon_class'] ) ? $service['icon_class'] : 'lni lni-capsule';
				$service_title = isset( $service['title'] ) ? $service['title'] : '';
				$service_description = isset( $service['description'] ) ? $service['description'] : '';
			?>
			<div class="col-lg-4 col-md-6">
				<div class="single-services">
					<div class="service-icon">
						<i class="<?php echo esc_attr( $service_icon_class ); ?>"></i>
					</div>
					<div class="service-content">
						<h4><?php echo wp_kses_post( $service_title ); ?></h4>
						<p><?php echo esc_html( $service_description ); ?></p>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

