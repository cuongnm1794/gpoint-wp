<?php
/**
 * Template part for Services Section with ACF fields
 *
 * @package BusinessOrange
 */

// Get ACF fields from current page
$services_title = get_field( 'services_title' ) ?: 'Our Best Services';
$services_subtitle = get_field( 'services_subtitle' ) ?: 'Services';
$services_description = get_field( 'services_description' ) ?: 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.';
$services_list = get_field( 'services_list' ) ?: array();

// If no services, use default placeholder
if ( empty( $services_list ) ) {
	$services_list = array(
		array( 'title' => 'Refreshing Design', 'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.', 'icon' => '' ),
		array( 'title' => 'Solid Bootstrap 5', 'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.', 'icon' => '' ),
		array( 'title' => '100+ Components', 'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.', 'icon' => '' ),
		array( 'title' => 'Speed Optimized', 'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.', 'icon' => '' ),
		array( 'title' => 'Fully Customizable', 'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.', 'icon' => '' ),
		array( 'title' => 'Regular Updates', 'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.', 'icon' => '' ),
	);
}
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:80px;padding-bottom:80px">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"50px"}}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"14px","fontWeight":"600","letterSpacing":"2px","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"primary-orange"} -->
		<h2 class="wp-block-heading has-text-align-center has-primary-orange-color has-text-color" style="margin-bottom:10px;font-size:14px;font-weight:600;letter-spacing:2px;text-transform:uppercase"><?php echo wp_kses_post( $services_subtitle ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"42px","fontWeight":"700"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"dark"} -->
		<h2 class="wp-block-heading has-text-align-center has-dark-color has-text-color" style="margin-bottom:20px;font-size:42px;font-weight:700"><?php echo wp_kses_post( $services_title ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"bottom":"60px"}}},"textColor":"text-gray"} -->
		<p class="has-text-align-center has-text-gray-color has-text-color" style="margin-bottom:60px;font-size:18px"><?php echo esc_html( $services_description ); ?></p>
		<!-- /wp:paragraph -->

		

		<?php
		// Split services into rows of 3
		$service_rows = array_chunk( $services_list, 3 );
		foreach ( $service_rows as $row_index => $row_services ) :
			if ( $row_index > 0 ) :
				?>
				<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"40px","left":"40px"}}}} -->
				<div class="wp-block-columns alignwide">
			<?php else : ?>
				<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"40px","left":"40px"}}}} -->
				<div class="wp-block-columns alignwide">
			<?php endif; ?>
			<?php
			foreach ( $row_services as $service ) :
				$service_title = isset( $service['title'] ) ? $service['title'] : '';
				$service_description = isset( $service['description'] ) ? $service['description'] : '';
				$service_icon = isset( $service['icon'] ) ? $service['icon'] : '';
				?>
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"spacing":{"blockGap":"20px","padding":{"top":"40px","bottom":"40px","left":"30px","right":"30px"}},"border":{"radius":"12px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
					<div class="wp-block-group has-white-background-color has-background" style="border-radius:12px;padding-top:40px;padding-right:30px;padding-bottom:40px;padding-left:30px">
						<?php if ( $service_icon ) : ?>
							<!-- wp:image {"width":60,"height":60,"sizeSlug":"full","linkDestination":"none"} -->
							<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $service_icon ); ?>" alt="<?php echo esc_attr( $service_title ); ?>" width="60" height="60"/></figure>
							<!-- /wp:image -->
						<?php else : ?>
							<!-- wp:image {"width":60,"height":60,"sizeSlug":"full","linkDestination":"none"} -->
							<figure class="wp-block-image size-full is-resized"><img alt="Icon" width="60" height="60"/></figure>
							<!-- /wp:image -->
						<?php endif; ?>

						<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"22px","fontWeight":"600"},"spacing":{"margin":{"top":"20px","bottom":"15px"}}},"textColor":"dark"} -->
						<h4 class="wp-block-heading has-dark-color has-text-color" style="margin-top:20px;margin-bottom:15px;font-size:22px;font-weight:600"><?php echo wp_kses_post( $service_title ); ?></h4>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.6"}}},"textColor":"text-gray"} -->
						<p class="has-text-gray-color has-text-color" style="font-size:16px;line-height:1.6"><?php echo esc_html( $service_description ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:columns -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

