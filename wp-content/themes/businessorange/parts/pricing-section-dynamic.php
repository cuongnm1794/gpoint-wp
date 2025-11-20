<?php
/**
 * Template part for Pricing Section with ACF fields
 *
 * @package BusinessOrange
 */

// Get ACF fields from current page
$pricing_title = get_field( 'pricing_title' ) ?: 'Pricing & Plans';
$pricing_subtitle = get_field( 'pricing_subtitle' ) ?: 'Pricing';
$pricing_description = get_field( 'pricing_description' ) ?: 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.';
$pricing_plans = get_field( 'pricing_plans' ) ?: array();

// If no plans, use default placeholder
if ( empty( $pricing_plans ) ) {
	$pricing_plans = array(
		array(
			'name' => 'Starter',
			'price' => '$0/mo',
			'description' => 'Lorem Ipsum is simply dummy text of the printing and industry.',
			'features' => array(
				array( 'text' => 'Cras justo odio.' ),
				array( 'text' => 'Dapibus ac facilisis in.' ),
				array( 'text' => 'Morbi leo risus.' ),
				array( 'text' => 'Excepteur sint occaecat velit.' ),
			),
			'button_text' => 'Start free trial',
			'button_link' => '',
			'featured' => false,
		),
		array(
			'name' => 'Exclusive',
			'price' => '$99/mo',
			'description' => 'Lorem Ipsum is simply dummy text of the printing and industry.',
			'features' => array(
				array( 'text' => 'Cras justo odio.' ),
				array( 'text' => 'Dapibus ac facilisis in.' ),
				array( 'text' => 'Morbi leo risus.' ),
				array( 'text' => 'Excepteur sint occaecat velit.' ),
			),
			'button_text' => 'Start free trial',
			'button_link' => '',
			'featured' => true,
		),
		array(
			'name' => 'Premium',
			'price' => '$150/mo',
			'description' => 'Lorem Ipsum is simply dummy text of the printing and industry.',
			'features' => array(
				array( 'text' => 'Cras justo odio.' ),
				array( 'text' => 'Dapibus ac facilisis in.' ),
				array( 'text' => 'Morbi leo risus.' ),
				array( 'text' => 'Excepteur sint occaecat velit.' ),
			),
			'button_text' => 'Start free trial',
			'button_link' => '',
			'featured' => false,
		),
	);
}
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"backgroundColor":"light-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-light-gray-background-color has-background" style="padding-top:80px;padding-bottom:80px">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"50px"}}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"14px","fontWeight":"600","letterSpacing":"2px","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"primary-orange"} -->
		<h2 class="wp-block-heading has-text-align-center has-primary-orange-color has-text-color" style="margin-bottom:10px;font-size:14px;font-weight:600;letter-spacing:2px;text-transform:uppercase"><?php echo wp_kses_post( $pricing_subtitle ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"42px","fontWeight":"700"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"dark"} -->
		<h2 class="wp-block-heading has-text-align-center has-dark-color has-text-color" style="margin-bottom:20px;font-size:42px;font-weight:700"><?php echo wp_kses_post( $pricing_title ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"bottom":"60px"}}},"textColor":"text-gray"} -->
		<p class="has-text-align-center has-text-gray-color has-text-color" style="margin-bottom:60px;font-size:18px"><?php echo wp_kses_post( $pricing_description ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"30px","left":"30px"}}}} -->
		<div class="wp-block-columns alignwide">
			<?php foreach ( $pricing_plans as $plan ) : 
				$plan_name = isset( $plan['name'] ) ? $plan['name'] : '';
				$plan_price = isset( $plan['price'] ) ? $plan['price'] : '';
				$plan_description = isset( $plan['description'] ) ? $plan['description'] : '';
				$plan_features = isset( $plan['features'] ) ? $plan['features'] : array();
				$plan_button_text = isset( $plan['button_text'] ) ? $plan['button_text'] : 'Start free trial';
				$plan_button_link = isset( $plan['button_link'] ) ? $plan['button_link'] : '#';
				$plan_featured = isset( $plan['featured'] ) && $plan['featured'] ? true : false;
				$border_style = $plan_featured ? 'border-color:#0066CC;border-width:2px' : 'border-color:#E0E0E0;border-width:1px';
			?>
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"spacing":{"blockGap":"30px","padding":{"top":"50px","bottom":"50px","left":"40px","right":"40px"}},"border":{"radius":"12px","width":"<?php echo $plan_featured ? '2px' : '1px'; ?>","color":"<?php echo $plan_featured ? '#0066CC' : '#E0E0E0'; ?>"},"backgroundColor":"white","layout":{"type":"constrained"}} -->
					<div class="wp-block-group has-white-background-color has-background" style="<?php echo esc_attr( $border_style ); ?>;border-radius:12px;padding-top:50px;padding-right:40px;padding-bottom:50px;padding-left:40px">
						<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"14px","fontWeight":"600","letterSpacing":"2px","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"15px"}}},"textColor":"primary-orange"} -->
						<h3 class="wp-block-heading has-text-align-center has-primary-orange-color has-text-color" style="margin-bottom:15px;font-size:14px;font-weight:600;letter-spacing:2px;text-transform:uppercase"><?php echo wp_kses_post( $plan_name ); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"},"spacing":{"margin":{"bottom":"30px"}}},"textColor":"text-gray"} -->
						<p class="has-text-align-center has-text-gray-color has-text-color" style="margin-bottom:30px;font-size:16px"><?php echo wp_kses_post( $plan_description ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"48px","fontWeight":"700"},"spacing":{"margin":{"bottom":"30px"}}},"textColor":"dark"} -->
						<h2 class="wp-block-heading has-text-align-center has-dark-color has-text-color" style="margin-bottom:30px;font-size:48px;font-weight:700"><?php echo wp_kses_post( $plan_price ); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
						<div class="wp-block-buttons">
							<!-- wp:button {"backgroundColor":"primary-orange","textColor":"white","style":{"border":{"radius":"4px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"28px","right":"28px"}}},"className":"is-style-fill"} -->
							<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-primary-orange-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( $plan_button_link ); ?>" style="border-radius:4px;padding-top:14px;padding-right:28px;padding-bottom:14px;padding-left:28px"><?php echo wp_kses_post( $plan_button_text ); ?></a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->

						<?php if ( ! empty( $plan_features ) ) : ?>
							<!-- wp:list {"style":{"spacing":{"padding":{"left":"0","top":"30px"}}},"className":"is-style-none"} -->
							<ul class="is-style-none" style="padding-left:0;padding-top:30px">
								<?php foreach ( $plan_features as $feature ) : 
									$feature_text = isset( $feature['text'] ) ? $feature['text'] : '';
									if ( ! empty( $feature_text ) ) :
								?>
									<!-- wp:list-item -->
									<li><?php echo wp_kses_post( $feature_text ); ?></li>
									<!-- /wp:list-item -->
								<?php 
									endif;
								endforeach; ?>
							</ul>
							<!-- /wp:list -->
						<?php endif; ?>
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

