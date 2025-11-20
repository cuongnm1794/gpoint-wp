<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package GPoint Business
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div id="page" class="site">
		<main id="main" class="site-main">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					the_content();
				}
			}
			?>
		</main>
	</div>
<?php wp_footer(); ?>
</body>
</html>

