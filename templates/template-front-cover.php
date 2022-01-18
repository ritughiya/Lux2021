<?php
/**
 * Template Name: Front Cover Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage EarlyLux
 * @since EarlyLux 1.0.3
 */

get_header();
?>



		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
?>




<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content-front-cover' );
		}
	}

	?>

</main><!-- #site-content -->


<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
