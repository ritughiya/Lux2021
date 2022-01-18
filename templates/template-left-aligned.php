<?php
/**
 * Template Name: Left Aligned Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage EarlyLux
 * @since EarlyLux 1.0.3
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content' );
		}
	}

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
