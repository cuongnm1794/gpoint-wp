<?php
/**
 * Template part for Blog Section with Customizer settings
 *
 * @package GPoint_Business
 */

// Get Customizer settings
$blog_subtitle = get_theme_mod( 'blog_subtitle', 'Tin tức' );
$blog_title = get_theme_mod( 'blog_title', 'Bản tin & Blog mới' );
$blog_description = get_theme_mod( 'blog_description', 'Luôn cập nhật xu hướng tiếp thị và công nghệ mới nhất giúp doanh nghiệp tối ưu hoạt động khuyến mãi O2O.' );

// Get blog posts from JSON
$default_posts = array(
	array(
		'title' => 'Lợi ích không thể bỏ qua của chiến lược phân phát mẫu thử',
		'author' => 'BY TIM NORTON',
		'excerpt' => 'Theo báo cáo gần đây của Sampling Effectiveness Advisors: 73% người tiêu dùng nói rằng họ có thể mua hàng sau khi trải nghiệm thử sản phẩm và chỉ 25% người tiêu dùng cho rằng quyết định mua của họ bị ảnh hưởng bởi quảng cáo truyền hình. Khi bạn khích lệ được nhiều...',
		'image' => get_template_directory_uri() . '/assets/images/blog/1.png',
		'link' => '#',
	),
	array(
		'title' => 'Hành trình 2 năm - Học bổng thắp sáng ước mơ',
		'author' => 'BY TIM NORTON',
		'excerpt' => 'Khi ước mơ được gieo mầm từ những điều nhỏ bé. Từ năm 2016, chương trình Học bổng Colgate ra đời với mong muốn tất cả mọi trẻ em Việt đều xứng đáng sở hữu nụ cười thật tươi trước một tương lai tươi sáng hơn. Để hiện thực hóa điều này, trong hai năm qua, Colgate đã nỗ...',
		'image' => get_template_directory_uri() . '/assets/images/blog/2.png',
		'link' => '#',
	),
	array(
		'title' => 'MCKINSEY Gợi ý 4 bước kích hoạt dữ liệu để tối ưu tiếp thị',
		'author' => 'BY TIM NORTON',
		'excerpt' => 'Theo nghiên cứu của McKinsey, kích hoạt dữ liệu (data activation) có thể thúc đẩy doanh số bán hàng của doanh nghiệp tăng lên 15-20%, doanh số của kênh kỹ thuật số thậm chí còn tăng nhiều hơn, đồng thời cải thiện đáng kể ROI cho mỗi kênh tiếp thị. Jane là một bà nội...',
		'image' => get_template_directory_uri() . '/assets/images/blog/3.png',
		'link' => '#',
	),
);
$blog_posts = gpoint_business_get_json_setting( 'blog_posts', $default_posts );
?>

<!-- wp:group {"id":"blog","className":"latest-news-area section","layout":{"type":"default"}} -->
<div id="blog" class="wp-block-group latest-news-area section">
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
						<h6><?php echo esc_html( $blog_subtitle ); ?></h6>
						<!-- /wp:heading -->

						<!-- wp:heading {"level":2,"className":"fw-bold"} -->
						<h2 class="fw-bold"><?php echo wp_kses_post( $blog_title ); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p><?php echo esc_html( $blog_description ); ?></p>
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
			<?php foreach ( $blog_posts as $post ) : 
				$post_title = isset( $post['title'] ) ? $post['title'] : '';
				$post_author = isset( $post['author'] ) ? $post['author'] : 'BY TIM NORTON';
				$post_excerpt = isset( $post['excerpt'] ) ? $post['excerpt'] : '';
				$post_image = isset( $post['image'] ) ? $post['image'] : '';
				$post_link = isset( $post['link'] ) ? $post['link'] : '#';
			?>
			<!-- wp:column {"className":"col-lg-4 col-md-6 col-12"} -->
			<div class="wp-block-column col-lg-4 col-md-6 col-12">
				<!-- wp:html -->
				<div class="single-news">
					<div class="image">
						<a href="<?php echo esc_url( $post_link ); ?>">
							<?php if ( $post_image ) : ?>
								<img class="thumb" src="<?php echo esc_url( $post_image ); ?>" alt="<?php echo esc_attr( $post_title ); ?>" />
							<?php else : ?>
								<img class="thumb" src="" alt="Blog" />
							<?php endif; ?>
						</a>
						<!-- <div class="meta-details">
							<img class="thumb" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blog/b6.jpg" alt="Author" />
							<span><?php echo esc_html( $post_author ); ?></span>
						</div> -->
					</div>
					<div class="content-body">
						<h4 class="title">
							<a href="<?php echo esc_url( $post_link ); ?>"><?php echo wp_kses_post( $post_title ); ?></a>
						</h4>
						<p><?php echo esc_html( $post_excerpt ); ?></p>
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
</div>
<!-- /wp:group -->

