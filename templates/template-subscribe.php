<?php
/**
 * Template Name: Subscribe Page Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Early_Lux
 * @since Twenty Twenty 1.0
 */


?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group" role="banner">

			<div class="header-inner section-inner">

				<div class="header-titles-wrapper">

					<div class="header-titles-large">

						<?php
							// Site title or logo.
							twentytwenty_site_logo(); ?>

					</div><!-- .header-titles -->

				</div><!-- .header-titles-wrapper -->

				<div class="header-navigation-wrapper">

					<?php
					if ( has_nav_menu( 'subscribe-menu' ) ) { 
					?>

							<nav class="subscribe-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'earlylux' ); ?>" role="navigation">

								<ul class="subscribe-menu reset-list-style">

								<?php
								if ( has_nav_menu( 'subscribe-menu' ) ) {

									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'subscribe-menu',
										)
									);

								} 
								?>

								</ul>

							</nav><!-- .subscribe-menu-wrapper -->

						<?php
					} ?>


				</div><!-- .header-navigation-wrapper -->

			</div><!-- .header-inner -->

	
		</header><!-- #site-header -->

	<main id="site-content" role="main">

		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			<?php


			if ( ! is_search() ) {
				get_template_part( 'template-parts/featured-image' );
			}

			?>

			<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

				<div class="entry-content">

					<?php
					if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
						the_excerpt();
					} else {
						the_content( __( 'Continue reading', 'twentytwenty' ) );
					}
					?>

				</div><!-- .entry-content -->

			</div><!-- .post-inner -->

			<div class="section-inner">
				<?php
				wp_link_pages(
					array(
						'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
						'after'       => '</nav>',
						'link_before' => '<span class="page-number">',
						'link_after'  => '</span>',
					)
				);

				edit_post_link();

				// Single bottom post meta.
				twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );

				if ( post_type_supports( get_post_type( get_the_ID() ), 'author' ) && is_single() ) {

					get_template_part( 'template-parts/entry-author-bio' );

				}
				?>

			</div><!-- .section-inner -->


		</article><!-- .post -->

	</main><!-- #site-content -->


<?php get_footer(); ?>
