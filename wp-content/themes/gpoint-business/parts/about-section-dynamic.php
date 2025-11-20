<?php
/**
 * Template part for About Section with Customizer settings
 *
 * @package GPoint_Business
 */

// Get Customizer settings
$about_subtitle = get_theme_mod( 'about_subtitle', 'VỀ CHÚNG TÔI' );
$about_title = get_theme_mod( 'about_title', 'HỆ THỐNG QUẢN LÝ VẬN HÀNH TOÀN DIỆN HOẠT ĐỘNG TẠI ĐIỂM BÁN O2O' );
$who_we_are = get_theme_mod( 'who_we_are', '<p>Nền tảng số hóa và giám sát realtime giúp doanh nghiệp minh bạch hóa và tối ưu mọi hoạt động khuyến mãi.</p><ul><li><strong>Công nghệ chuyên biệt:</strong> Module riêng cho Client, Sup, PG – xử lý triệt để quy trình Activation/Promotion.</li><li><strong>Kiểm soát O2O toàn diện:</strong> Quản lý khuyến mãi từ Offline (sampling, trao thưởng) đến Online (minigame, quay số), kết nối dữ liệu xuyên kênh.</li><li><strong>Dịch vụ kép:</strong> Cung cấp đồng thời hệ thống & dịch vụ vận hành, giúp thương hiệu triển khai nhanh và hiệu quả.</li></ul><p>GAPIT – Đồng hành cùng doanh nghiệp trong chuyển đổi số hoạt động khuyến mãi, tối ưu chi phí và gia tăng tương tác khách hàng.</p>' );
$vision = get_theme_mod( 'vision', '<p>Giúp doanh nghiệp xóa nhòa khoảng cách với khách hàng thông qua các dịch vụ tiếp thị số</p>' );
$history = get_theme_mod( 'history', '<p>Trở thành công ty truyền thông hàng đậu tại Đông Nam Á cung cấp dịch vụ quản trị thực thi hoạt động Marketing đa kênh trên nền tảng thông minh</p>' );
?>

<!-- wp:group {"tagName":"section","className":"about-area about-five","layout":{"type":"default"}} -->
<section class="wp-block-group about-area about-five">
	<!-- wp:group {"className":"container","layout":{"type":"default"}} -->
	<div class="wp-block-group container">
		<!-- wp:columns {"className":"row align-items-center"} -->
		<div class="wp-block-columns row align-items-center">
			<!-- wp:column {"className":"col-lg-6 col-12"} -->
			<div class="wp-block-column col-lg-6 col-12">
				<!-- wp:group {"className":"about-image-five","layout":{"type":"default"}} -->
				<div class="wp-block-group about-image-five">
					<!-- wp:html -->
					<svg class="shape" width="106" height="134" viewBox="0 0 106 134" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="1.66654" cy="1.66679" r="1.66667" fill="#DADADA" />
						<circle cx="1.66654" cy="16.3335" r="1.66667" fill="#DADADA" />
						<circle cx="1.66654" cy="31.0001" r="1.66667" fill="#DADADA" />
						<circle cx="1.66654" cy="45.6668" r="1.66667" fill="#DADADA" />
						<circle cx="1.66654" cy="60.3335" r="1.66667" fill="#DADADA" />
						<circle cx="1.66654" cy="88.6668" r="1.66667" fill="#DADADA" />
						<circle cx="1.66654" cy="117.667" r="1.66667" fill="#DADADA" />
						<circle cx="1.66654" cy="74.6668" r="1.66667" fill="#DADADA" />
						<circle cx="1.66654" cy="103" r="1.66667" fill="#DADADA" />
						<circle cx="1.66654" cy="132" r="1.66667" fill="#DADADA" />
						<circle cx="16.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
						<circle cx="16.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
						<circle cx="16.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
						<circle cx="16.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
						<circle cx="16.333" cy="60.3335" r="1.66667" fill="#DADADA" />
						<circle cx="16.333" cy="88.6668" r="1.66667" fill="#DADADA" />
						<circle cx="16.333" cy="117.667" r="1.66667" fill="#DADADA" />
						<circle cx="16.333" cy="74.6668" r="1.66667" fill="#DADADA" />
						<circle cx="16.333" cy="103" r="1.66667" fill="#DADADA" />
						<circle cx="16.333" cy="132" r="1.66667" fill="#DADADA" />
						<circle cx="30.9998" cy="1.66679" r="1.66667" fill="#DADADA" />
						<circle cx="74.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
						<circle cx="30.9998" cy="16.3335" r="1.66667" fill="#DADADA" />
						<circle cx="74.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
						<circle cx="30.9998" cy="31.0001" r="1.66667" fill="#DADADA" />
						<circle cx="74.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
						<circle cx="30.9998" cy="45.6668" r="1.66667" fill="#DADADA" />
						<circle cx="74.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
						<circle cx="31" cy="60.3335" r="1.66667" fill="#DADADA" />
						<circle cx="74.6668" cy="60.3335" r="1.66667" fill="#DADADA" />
						<circle cx="31" cy="88.6668" r="1.66667" fill="#DADADA" />
						<circle cx="74.6668" cy="88.6668" r="1.66667" fill="#DADADA" />
						<circle cx="31" cy="117.667" r="1.66667" fill="#DADADA" />
						<circle cx="74.6668" cy="117.667" r="1.66667" fill="#DADADA" />
						<circle cx="31" cy="74.6668" r="1.66667" fill="#DADADA" />
						<circle cx="74.6668" cy="74.6668" r="1.66667" fill="#DADADA" />
						<circle cx="31" cy="103" r="1.66667" fill="#DADADA" />
						<circle cx="74.6668" cy="103" r="1.66667" fill="#DADADA" />
						<circle cx="31" cy="132" r="1.66667" fill="#DADADA" />
						<circle cx="74.6668" cy="132" r="1.66667" fill="#DADADA" />
						<circle cx="45.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
						<circle cx="89.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
						<circle cx="45.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
						<circle cx="89.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
						<circle cx="45.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
						<circle cx="89.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
						<circle cx="45.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
						<circle cx="89.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
						<circle cx="45.6665" cy="60.3335" r="1.66667" fill="#DADADA" />
						<circle cx="89.3333" cy="60.3335" r="1.66667" fill="#DADADA" />
						<circle cx="45.6665" cy="88.6668" r="1.66667" fill="#DADADA" />
						<circle cx="89.3333" cy="88.6668" r="1.66667" fill="#DADADA" />
						<circle cx="45.6665" cy="117.667" r="1.66667" fill="#DADADA" />
						<circle cx="89.3333" cy="117.667" r="1.66667" fill="#DADADA" />
						<circle cx="45.6665" cy="74.6668" r="1.66667" fill="#DADADA" />
						<circle cx="89.3333" cy="74.6668" r="1.66667" fill="#DADADA" />
						<circle cx="45.6665" cy="103" r="1.66667" fill="#DADADA" />
						<circle cx="89.3333" cy="103" r="1.66667" fill="#DADADA" />
						<circle cx="45.6665" cy="132" r="1.66667" fill="#DADADA" />
						<circle cx="89.3333" cy="132" r="1.66667" fill="#DADADA" />
						<circle cx="60.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
						<circle cx="104" cy="1.66679" r="1.66667" fill="#DADADA" />
						<circle cx="60.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
						<circle cx="104" cy="16.3335" r="1.66667" fill="#DADADA" />
						<circle cx="60.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
						<circle cx="104" cy="31.0001" r="1.66667" fill="#DADADA" />
						<circle cx="60.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
						<circle cx="104" cy="45.6668" r="1.66667" fill="#DADADA" />
						<circle cx="60.333" cy="60.3335" r="1.66667" fill="#DADADA" />
						<circle cx="104" cy="60.3335" r="1.66667" fill="#DADADA" />
						<circle cx="60.333" cy="88.6668" r="1.66667" fill="#DADADA" />
						<circle cx="104" cy="88.6668" r="1.66667" fill="#DADADA" />
						<circle cx="60.333" cy="117.667" r="1.66667" fill="#DADADA" />
						<circle cx="104" cy="117.667" r="1.66667" fill="#DADADA" />
						<circle cx="60.333" cy="74.6668" r="1.66667" fill="#DADADA" />
						<circle cx="104" cy="74.6668" r="1.66667" fill="#DADADA" />
						<circle cx="60.333" cy="103" r="1.66667" fill="#DADADA" />
						<circle cx="104" cy="103" r="1.66667" fill="#DADADA" />
						<circle cx="60.333" cy="132" r="1.66667" fill="#DADADA" />
						<circle cx="104" cy="132" r="1.66667" fill="#DADADA" />
					</svg>
					<!-- /wp:html -->
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about/about-img1.png' ); ?>" alt="About" /></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"col-lg-6 col-12"} -->
			<div class="wp-block-column col-lg-6 col-12">
				<!-- wp:group {"className":"about-five-content","layout":{"type":"default"}} -->
				<div class="wp-block-group about-five-content">
					<!-- wp:heading {"level":6,"className":"small-title text-lg"} -->
					<h6 class="small-title text-lg"><?php echo esc_html( $about_subtitle ); ?></h6>
					<!-- /wp:heading -->

					<!-- wp:heading {"level":2,"className":"main-title fw-bold"} -->
					<h2 class="main-title fw-bold"><?php echo wp_kses_post( $about_title ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:html -->
					<div class="about-five-tab">
						<nav>
							<div class="nav nav-tabs" id="nav-tab" role="tablist">
								<button class="nav-link active" id="nav-who-tab" data-bs-toggle="tab" data-bs-target="#nav-who" type="button" role="tab" aria-controls="nav-who" aria-selected="true">Giải Pháp O2O Toàn Diện Cho Doanh Nghiệp</button>
								<button class="nav-link" id="nav-vision-tab" data-bs-toggle="tab" data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision" aria-selected="false">Sứ mệnh</button>
								<button class="nav-link" id="nav-history-tab" data-bs-toggle="tab" data-bs-target="#nav-history" type="button" role="tab" aria-controls="nav-history" aria-selected="false">Tầm nhìn</button>
							</div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-who" role="tabpanel" aria-labelledby="nav-who-tab">
								<?php echo wp_kses_post( $who_we_are ); ?>
							</div>
							<div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
								<?php echo wp_kses_post( $vision ); ?>
							</div>
							<div class="tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="nav-history-tab">
								<?php echo wp_kses_post( $history ); ?>
							</div>
						</div>
					</div>
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

