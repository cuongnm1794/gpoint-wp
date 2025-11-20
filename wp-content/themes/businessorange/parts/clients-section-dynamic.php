<?php
/**
 * Template part for Clients Section with ACF fields
 *
 * @package BusinessOrange
 */

// Get ACF fields from current page
$clients_subtitle = get_field( 'clients_subtitle' ) ?: 'Meet our Clients';
$clients_title = get_field( 'clients_title' ) ?: 'Our Awesome Clients';
$clients_description = get_field( 'clients_description' ) ?: 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.';
$clients_list = get_field( 'clients_list' ) ?: array();

// If no clients, use default placeholder
if ( empty( $clients_list ) ) {
	$clients_list = array(
		array( 'logo' => '' ),
		array( 'logo' => '' ),
		array( 'logo' => '' ),
		array( 'logo' => '' ),
		array( 'logo' => '' ),
		array( 'logo' => '' ),
	);
}
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"backgroundColor":"light-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-light-gray-background-color has-background" style="padding-top:80px;padding-bottom:80px">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"50px"}}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"14px","fontWeight":"600","letterSpacing":"2px","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"primary-orange"} -->
		<h2 class="wp-block-heading has-text-align-center has-primary-orange-color has-text-color" style="margin-bottom:10px;font-size:14px;font-weight:600;letter-spacing:2px;text-transform:uppercase"><?php echo wp_kses_post( $clients_subtitle ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"42px","fontWeight":"700"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"dark"} -->
		<h2 class="wp-block-heading has-text-align-center has-dark-color has-text-color" style="margin-bottom:20px;font-size:42px;font-weight:700"><?php echo wp_kses_post( $clients_title ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"bottom":"60px"}}},"textColor":"text-gray"} -->
		<p class="has-text-align-center has-text-gray-color has-text-color" style="margin-bottom:60px;font-size:18px"><?php echo esc_html( $clients_description ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<div class="swiper clients-carousel">
			<div class="swiper-wrapper">
				<?php foreach ( $clients_list as $client ) : 
					$client_logo = isset( $client['logo'] ) ? $client['logo'] : '';
				?>
				<div class="swiper-slide">
					<div class="client-logo" style="display: flex; align-items: center; justify-content: center; padding: 30px; background: white; border-radius: 8px; height: 150px;">
						<?php if ( $client_logo ) : ?>
							<img src="<?php echo esc_url( $client_logo ); ?>" alt="Client Logo" style="max-width: 150px; max-height: 80px; object-fit: contain;" />
						<?php else : ?>
							<img src="" alt="Client Logo" style="max-width: 150px; max-height: 80px; object-fit: contain;" />
						<?php endif; ?>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

