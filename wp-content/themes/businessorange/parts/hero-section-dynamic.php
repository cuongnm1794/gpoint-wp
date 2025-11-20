<?php
/**
 * Template part for Hero Section with ACF fields
 *
 * @package BusinessOrange
 */

// Get ACF fields from current page
$hero_title = get_field( 'hero_title' ) ?: 'Corporate & Business Site Template by BusinessOrange.';
$hero_description = get_field( 'hero_description' ) ?: 'We are a digital agency that helps brands to achieve their business outcomes. We see technology as a tool to create amazing things.';
$hero_button1_text = get_field( 'hero_button1_text' ) ?: 'Get Started';
$hero_button1_link = get_field( 'hero_button1_link' ) ?: '#';
$hero_button2_text = get_field( 'hero_button2_text' ) ?: 'Watch Intro';
$hero_button2_link = get_field( 'hero_button2_link' ) ?: '#';
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"120px","bottom":"120px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:120px;padding-bottom:120px">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"40px"}}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"64px","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"30px"}}},"textColor":"dark"} -->
		<h1 class="wp-block-heading has-text-align-center has-dark-color has-text-color" style="margin-bottom:30px;font-size:64px;font-weight:700;line-height:1.2"><?php echo wp_kses_post( $hero_title ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"20px","lineHeight":"1.8"},"spacing":{"margin":{"bottom":"40px"}}},"textColor":"text-gray"} -->
		<p class="has-text-align-center has-text-gray-color has-text-color" style="margin-bottom:40px;font-size:20px;line-height:1.8"><?php echo esc_html( $hero_description ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"20px"}}} -->
		<div class="wp-block-buttons">
			<?php if ( $hero_button1_text && $hero_button1_link ) : ?>
			<!-- wp:button {"backgroundColor":"primary-orange","textColor":"white","style":{"border":{"radius":"4px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"32px","right":"32px"}}},"fontSize":"large","className":"is-style-fill"} -->
			<div class="wp-block-button has-custom-font-size is-style-fill" style="font-size:large"><a class="wp-block-button__link has-white-color has-primary-orange-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( $hero_button1_link ); ?>" style="border-radius:4px;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px"><?php echo wp_kses_post( $hero_button1_text ); ?></a></div>
			<!-- /wp:button -->
			<?php endif; ?>

			<?php if ( $hero_button2_text && $hero_button2_link ) : ?>
			<!-- wp:button {"textColor":"primary-orange","style":{"border":{"radius":"4px","width":"2px","color":"var:preset|color|primary-orange"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"32px","right":"32px"}}},"fontSize":"large","className":"is-style-outline"} -->
			<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:large"><a class="wp-block-button__link has-primary-orange-color has-text-color wp-element-button" href="<?php echo esc_url( $hero_button2_link ); ?>" style="border-color:var(--wp--preset--color--primary-orange);border-width:2px;border-radius:4px;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px"><?php echo wp_kses_post( $hero_button2_text ); ?></a></div>
			<!-- /wp:button -->
			<?php endif; ?>
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

