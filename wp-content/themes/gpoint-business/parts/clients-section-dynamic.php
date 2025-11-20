<?php
/**
 * Template part for Clients Section with Customizer settings
 *
 * @package GPoint_Business
 */

// Get Customizer settings
$clients_subtitle = get_theme_mod( 'clients_subtitle', 'G-Point' );
$clients_title = get_theme_mod( 'clients_title', 'G-point đã phục vụ' );
$clients_description = get_theme_mod( 'clients_description', 'Hơn 500 doanh nghiệp tin dùng trên toàn quốc' );

// Get clients list from JSON
$default_clients = array(
	array( 'logo' => get_template_directory_uri() . '/assets/images/client-logo/graygrids.svg' ),
	array( 'logo' => get_template_directory_uri() . '/assets/images/client-logo/uideck.svg' ),
	array( 'logo' => get_template_directory_uri() . '/assets/images/client-logo/ayroui.svg' ),
	array( 'logo' => get_template_directory_uri() . '/assets/images/client-logo/lineicons.svg' ),
	array( 'logo' => get_template_directory_uri() . '/assets/images/client-logo/tailwindtemplates.svg' ),
	array( 'logo' => get_template_directory_uri() . '/assets/images/client-logo/ecomhtml.svg' ),
);
$url_image = get_template_directory_uri() . '/assets/images/client-logo/7.png';
$clients_list = gpoint_business_get_json_setting( 'clients_list', $default_clients );
?>

<!-- wp:group {"id":"clients","className":"brand-area section","layout":{"type":"default"}} -->
<div id="clients" class="wp-block-group brand-area section">
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
						<h6><?php echo esc_html( $clients_subtitle ); ?></h6>
						<!-- /wp:heading -->

						<!-- wp:heading {"level":2,"className":"fw-bold"} -->
						<h2 class="fw-bold"><?php echo wp_kses_post( $clients_title ); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p><?php echo esc_html( $clients_description ); ?></p>
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
		<!-- wp:group {"className":"row","layout":{"type":"default"}} -->
		<div class="wp-block-group row">
			<!-- wp:group {"className":"col-lg-8 offset-lg-2 col-12","layout":{"type":"default"}} -->
			<div class="wp-block-group col-lg-8 offset-lg-2 col-12">
				<!-- wp:html -->
				<!-- <div class="clients-logos">
					<?php foreach ( $clients_list as $client ) : 
						$client_logo = isset( $client['logo'] ) ? $client['logo'] : '';
					?>
					<div class="single-image">
						<?php if ( $client_logo ) : ?>
							<img src="<?php echo esc_url( $client_logo ); ?>" alt="Brand Logo Images" />
						<?php else : ?>
							<img src="" alt="Brand Logo Images" />
						<?php endif; ?>
					</div>
					<?php endforeach; ?>
				</div> -->
				<img src="<?php echo esc_url( $url_image ); ?>" alt="Brand Logo Images" />

				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

