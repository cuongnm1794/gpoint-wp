<?php
/**
 * Template part for CTA Section with ACF fields
 *
 * @package BusinessOrange
 */

// Get ACF fields from current page
$cta_title = get_field( 'cta_title' ) ?: 'We love to make perfect\nsolutions for your business';
$cta_description = get_field( 'cta_description' ) ?: 'Why I say old chap that is, spiffing off his nut cor blimey guvnords geeza bloke knees up bobby, sloshed arse William cack Richard. Bloke fanny around chesed of bum bag old lost the pilot say there spiffing off his nut.';
$cta_button_text = get_field( 'cta_button_text' ) ?: 'Get Started';
$cta_button_link = get_field( 'cta_button_link' ) ?: '#';

// Convert \n to <br> for title
$cta_title_formatted = nl2br( esc_html( $cta_title ) );
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"backgroundColor":"primary-orange","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-orange-background-color has-background" style="padding-top:100px;padding-bottom:100px">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"40px"}}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"48px","fontWeight":"700","lineHeight":"1.3"},"spacing":{"margin":{"bottom":"30px"}}},"textColor":"white"} -->
		<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="margin-bottom:30px;font-size:48px;font-weight:700;line-height:1.3"><?php echo wp_kses_post( $cta_title_formatted ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px","lineHeight":"1.8"},"spacing":{"margin":{"bottom":"40px"}}},"textColor":"white"} -->
		<p class="has-text-align-center has-white-color has-text-color" style="margin-bottom:40px;font-size:18px;line-height:1.8"><?php echo esc_html( $cta_description ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<?php if ( $cta_button_text && $cta_button_link ) : ?>
			<!-- wp:button {"backgroundColor":"white","textColor":"primary-orange","style":{"border":{"radius":"4px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"32px","right":"32px"}}},"fontSize":"large","className":"is-style-fill"} -->
			<div class="wp-block-button has-custom-font-size is-style-fill" style="font-size:large"><a class="wp-block-button__link has-primary-orange-color has-white-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( $cta_button_link ); ?>" style="border-radius:4px;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px"><?php echo wp_kses_post( $cta_button_text ); ?></a></div>
			<!-- /wp:button -->
			<?php endif; ?>
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

