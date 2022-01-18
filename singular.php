<?php
/**
 * Template Post Type: article
 *
 * @package WordPress
 * @subpackage EarlyLux
 * @since EarlyLux 1.0.3
 */

 //Issue Meta
 // $dark_mode = get_field('dark_mode');
 // $body_classes= '';
 // if ($dark_mode) {
 // 	$body_classes .= 'dark-mode';
 // }

 $issue = get_field('issue');

 ?>

<?php get_header('article'); ?>



<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<?php get_header('breadcrumbs'); ?>




	<header class="Lux-entry-header has-text-align-center<?php echo esc_attr( $entry_header_classes ); ?>">

	<div class="Lux-entry-header-inner Luxstandard-section-inner medium">
		<?php
		// HED

		if ( is_singular() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			}
		else {
				the_title( '<h2 class="entry-title heading-size-1"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
			}


	if ( ! is_search() ) {
		get_template_part( 'template-parts/featured-image' );
	}

	$entry_header_classes = '';

	if ( is_singular() ) {
		$entry_header_classes .= ' header-footer-group';
	}

		// DEK
		$dek = get_post_meta($post->ID, 'lux_article_dek_field', true);

		?>
		<div class="dek" style="color:<?php the_field('article_accent_color'); ?>"><?php echo $dek; ?> </div>

		<?php
		// Contributors

		// Check rows exists.
		if( have_rows('article_contributors') ):
			echo '<div class="contributors">';

			// Loop through rows.
			while( have_rows('article_contributors') ) : the_row();
				$role = get_sub_field('role');
				$contributor = get_sub_field('contributor');
				echo '<p><span class="role">'. $role . ' </span>';
				foreach ($contributor as $name){
					echo '<span class="name">' . esc_html( get_the_title($name)) . '</span>';
				}
				echo '</p>';

			// End loop.
			endwhile;

			echo '</div>';

		endif;
		?>

	</div>
	</header>


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

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
