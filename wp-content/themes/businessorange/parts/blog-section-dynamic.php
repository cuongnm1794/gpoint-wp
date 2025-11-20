<?php
/**
 * Template part for Blog Section with ACF fields
 *
 * @package BusinessOrange
 */

// Get ACF fields from current page
$blog_subtitle = get_field( 'blog_subtitle' ) ?: 'latest news';
$blog_title = get_field( 'blog_title' ) ?: 'Latest News & Blog';
$blog_description = get_field( 'blog_description' ) ?: 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.';
$blog_posts = get_field( 'blog_posts' ) ?: array();

// If no blog posts, use default placeholder
if ( empty( $blog_posts ) ) {
	$blog_posts = array(
		array(
			'title' => 'Lợi ích không thể bỏ qua của chiến lược phân phát mẫu thử',
			'author' => 'Author BY TIM NORTON',
			'excerpt' => 'Theo báo cáo gần đây của Sampling Effectiveness Advisors: 73% người tiêu dùng nói rằng họ có thể mua hàng sau khi trải nghiệm thử sản phẩm và chỉ 25% người tiêu dùng cho rằng quyết định mua của họ bị ảnh hưởng bởi quảng cáo truyền hình. Khi bạn khích lệ được nhiều...',
			'image' => '',
			'link' => '',
		),
		array(
			'title' => 'The newest web framework that changed the world',
			'author' => 'Author BY TIM NORTON',
			'excerpt' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard.',
			'image' => '',
			'link' => '',
		),
		array(
			'title' => '5 ways to improve user retention for your startup',
			'author' => 'Author BY TIM NORTON',
			'excerpt' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard.',
			'image' => '',
			'link' => '',
		),
	);
}
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:80px;padding-bottom:80px">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"50px"}}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"14px","fontWeight":"600","letterSpacing":"2px","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"primary-orange"} -->
		<h2 class="wp-block-heading has-text-align-center has-primary-orange-color has-text-color" style="margin-bottom:10px;font-size:14px;font-weight:600;letter-spacing:2px;text-transform:uppercase"><?php echo wp_kses_post( $blog_subtitle ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"42px","fontWeight":"700"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"dark"} -->
		<h2 class="wp-block-heading has-text-align-center has-dark-color has-text-color" style="margin-bottom:20px;font-size:42px;font-weight:700"><?php echo wp_kses_post( $blog_title ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"bottom":"60px"}}},"textColor":"text-gray"} -->
		<p class="has-text-align-center has-text-gray-color has-text-color" style="margin-bottom:60px;font-size:18px"><?php echo esc_html( $blog_description ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"30px","left":"30px"}}}} -->
		<div class="wp-block-columns alignwide">
			<?php foreach ( $blog_posts as $post ) : 
				$post_title = isset( $post['title'] ) ? $post['title'] : '';
				$post_author = isset( $post['author'] ) ? $post['author'] : 'Author BY TIM NORTON';
				$post_excerpt = isset( $post['excerpt'] ) ? $post['excerpt'] : '';
				$post_image = isset( $post['image'] ) ? $post['image'] : '';
				$post_link = isset( $post['link'] ) ? $post['link'] : '#';
			?>
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"20px","padding":{"top":"0","bottom":"30px"}},"border":{"radius":"12px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-white-background-color has-background" style="border-radius:12px;padding-top:0;padding-bottom:30px">
					<?php if ( $post_image ) : ?>
						<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px 12px 0 0"}}} -->
						<figure class="wp-block-image size-full" style="border-radius:12px 12px 0 0"><img src="<?php echo esc_url( $post_image ); ?>" alt="<?php echo esc_attr( $post_title ); ?>"/></figure>
						<!-- /wp:image -->
					<?php else : ?>
						<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px 12px 0 0"}}} -->
						<figure class="wp-block-image size-full" style="border-radius:12px 12px 0 0"><img alt="Blog post"/></figure>
						<!-- /wp:image -->
					<?php endif; ?>

					<!-- wp:group {"style":{"spacing":{"blockGap":"15px","padding":{"top":"30px","left":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-left:30px">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"primary-orange"} -->
						<p class="has-primary-orange-color has-text-color" style="margin-bottom:10px;font-size:12px;font-weight:600;text-transform:uppercase;letter-spacing:1px">Blog</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"bottom":"15px"}}},"textColor":"text-gray"} -->
						<p class="has-text-gray-color has-text-color" style="margin-bottom:15px;font-size:14px"><?php echo esc_html( $post_author ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"22px","fontWeight":"600"},"spacing":{"margin":{"bottom":"15px"}}},"textColor":"dark"} -->
						<h4 class="wp-block-heading has-dark-color has-text-color" style="margin-bottom:15px;font-size:22px;font-weight:600"><?php echo wp_kses_post( $post_title ); ?></h4>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.6"}}},"textColor":"text-gray"} -->
						<p class="has-text-gray-color has-text-color" style="font-size:16px;line-height:1.6"><?php echo esc_html( $post_excerpt ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

