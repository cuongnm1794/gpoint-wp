<?php
/**
 * Template part for Hero Section with Customizer settings
 *
 * @package GPoint_Business
 */

// Get Customizer settings
$hero_title = get_theme_mod( 'hero_title', 'Một CHẠM đến mọi điểm tiếp thị' );
$hero_description = get_theme_mod( 'hero_description', 'Hệ sinh thái quản lý nghiệp vụ toàn diện các hoạt động khuyến mãi bán hàng tại điểm bán từ OFFLINE đến ONLINE' );
$hero_button1_text = get_theme_mod( 'hero_button1_text', 'VỀ CHÚNG TÔI' );
$hero_button1_link = get_theme_mod( 'hero_button1_link', '#' );
$hero_button2_text = get_theme_mod( 'hero_button2_text', 'LIÊN HỆ' );
$hero_button2_link = get_theme_mod( 'hero_button2_link', 'https://www.youtube.com/watch?v=r44RKWyfcFw' );
?>

<!-- wp:group {"tagName":"section","id":"hero-area","className":"header-area header-eight","layout":{"type":"default"}} -->
<section id="hero-area" class="wp-block-group header-area header-eight">
	<!-- wp:group {"className":"container","layout":{"type":"default"}} -->
	<div class="wp-block-group container">
		<!-- wp:columns {"className":"row align-items-center"} -->
		<div class="wp-block-columns row align-items-center">
			<!-- wp:column {"className":"col-lg-6 col-md-12 col-12"} -->
			<div class="wp-block-column col-lg-6 col-md-12 col-12">
				<!-- wp:group {"className":"header-content","layout":{"type":"default"}} -->
				<div class="wp-block-group header-content">
					<!-- wp:heading {"level":1} -->
					<h1><?php echo wp_kses_post( $hero_title ); ?></h1>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p><?php echo esc_html( $hero_description ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"className":"button","layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group button">
						<!-- wp:html -->
						<?php if ( $hero_button1_text && $hero_button1_link ) : ?>
						<a href="<?php echo esc_url( $hero_button1_link ); ?>" class="btn primary-btn"><?php echo wp_kses_post( $hero_button1_text ); ?></a>
						<?php endif; ?>
						<!-- <?php if ( $hero_button2_text && $hero_button2_link ) : ?>
						<a href="<?php echo esc_url( $hero_button2_link ); ?>" class="glightbox video-button">
							<span class="btn icon-btn rounded-full">
								<i class="lni lni-play"></i>
							</span>
							<span class="text"><?php echo wp_kses_post( $hero_button2_text ); ?></span>
						</a>
						<?php endif; ?> -->
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"col-lg-6 col-md-12 col-12"} -->
			<div class="wp-block-column col-lg-6 col-md-12 col-12">
				<!-- wp:group {"className":"header-image","layout":{"type":"default"}} -->
				<div class="wp-block-group header-image">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/header/hero-image.png' ); ?>" alt="Hero Image" /></figure>
					<!-- /wp:image -->
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

