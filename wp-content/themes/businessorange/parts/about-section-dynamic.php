<?php
/**
 * Template part for OUR STORY Section with ACF fields
 *
 * @package BusinessOrange
 */

// Get ACF fields from current page
$our_story_title = get_field( 'our_story_title' ) ?: 'Our team comes with the experience and knowledge';
$our_story_subtitle = get_field( 'our_story_subtitle' ) ?: 'OUR STORY';
$who_we_are = get_field( 'who_we_are' ) ?: '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.</p>';
$vision = get_field( 'vision' ) ?: '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.</p>';
$history = get_field( 'history' ) ?: '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.</p>';
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"backgroundColor":"light-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-light-gray-background-color has-background" style="padding-top:80px;padding-bottom:80px">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"50px"}}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"14px","fontWeight":"600","letterSpacing":"2px","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"primary-orange"} -->
		<h2 class="wp-block-heading has-text-align-center has-primary-orange-color has-text-color" style="margin-bottom:10px;font-size:14px;font-weight:600;letter-spacing:2px;text-transform:uppercase"><?php echo wp_kses_post( $our_story_subtitle ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"42px","fontWeight":"700"},"spacing":{"margin":{"bottom":"60px"}}},"textColor":"dark"} -->
		<h2 class="wp-block-heading has-text-align-center has-dark-color has-text-color" style="margin-bottom:60px;font-size:42px;font-weight:700"><?php echo wp_kses_post( $our_story_title ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:html -->
		<div class="about-tabs">
			<div class="tab-buttons" style="display: flex; justify-content: center; gap: 10px; margin-bottom: 40px; flex-wrap: wrap;">
				<button class="tab-button active" data-tab="who-we-are" style="padding: 12px 24px; background: #0066CC; color: white; border: none; border-radius: 4px; cursor: pointer; font-weight: 600;">Giải Pháp O2O Toàn Diện Cho Doanh Nghiệp</button>
				<button class="tab-button" data-tab="vision" style="padding: 12px 24px; background: transparent; color: #1A1A1A; border: 2px solid #E0E0E0; border-radius: 4px; cursor: pointer; font-weight: 600;">Sứ mệnh</button>
				<button class="tab-button" data-tab="history" style="padding: 12px 24px; background: transparent; color: #1A1A1A; border: 2px solid #E0E0E0; border-radius: 4px; cursor: pointer; font-weight: 600;">Tầm nhìn</button>
			</div>
			
			<div class="tab-content">
				<div class="tab-pane active" id="who-we-are" style="font-size: 18px; line-height: 1.8; color: #666666;">
					<?php echo wp_kses_post( $who_we_are ); ?>
				</div>
				<div class="tab-pane" id="vision" style="display: none; font-size: 18px; line-height: 1.8; color: #666666;">
					<?php echo wp_kses_post( $vision ); ?>
				</div>
				<div class="tab-pane" id="history" style="display: none; font-size: 18px; line-height: 1.8; color: #666666;">
					<?php echo wp_kses_post( $history ); ?>
				</div>
			</div>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

