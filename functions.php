<?php


	if ( ! function_exists( 'earlylux_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */

	function earlylux_setup() {

		add_theme_support( 'editor-styles' );
		add_editor_style( 'editor-style.css' );

		// Remove Editor Palette from twentytwenty.
		remove_theme_support('editor-color-palette');

		// Redefine Editor Palette
		add_theme_support( 'editor-color-palette', array(

			array(
				'name'  => __( 'Lux Red', 'earlylux' ),
				'slug'  => 'lux-red',
				'color' => '#aa1e1e',
			),

			array(
				'name'  => __( 'Rusty Red', 'earlylux' ),
				'slug'  => 'rusty-red',
				'color' => '#c84628',
			),

			array(
				'name'  => __( 'Berry', 'earlylux' ),
				'slug'  => 'Berry',
				'color' => '#d42b39',
			),

			array(
				'name'  => __( 'Lilac', 'earlylux' ),
				'slug'  => 'lilac',
				'color' => '#9a55cc',
			),

			array(
				'name'  => __( 'Moss', 'earlylux' ),
				'slug'  => 'moss',
				'color' => '#c4bf67',
			),

			array(
				'name'  => __( 'Plum', 'earlylux' ),
				'slug'  => 'plum',
				'color' => '#c38ead',
			),


			array(
				'name'  => __( 'Latte', 'earlylux' ),
				'slug'  => 'latte',
				'color' => '#eae1ce',
			),


			array(
				'name'  => __( 'Goldenrod', 'earlylux' ),
				'slug'  => 'goldenrod',
				'color' => '#f2da65',
			),

			array(
				'name'  => __( 'Sunshine', 'earlylux' ),
				'slug'  => 'sunshine',
				'color' => '#f4dc4a',
			),

			array(
				'name'  => __( 'White', 'earlylux' ),
				'slug'  => 'white',
				'color' => '#FFFFFF',
			),

			array(
				'name'  => __( 'Cream', 'earlylux' ),
				'slug'  => 'cream',
				'color' => '#edede9',
			),


			array(
				'name'  => __( 'Very Light Gray', 'earlylux' ),
				'slug'  => 'very-light-gray',
				'color' => '#EDEDED',
			),

			array(
				'name'  => __( 'Gray', 'earlylux' ),
				'slug'  => 'gray',
				'color' => '#6d6d6d',
			),

			array(
				'name'  => __( 'Black', 'earlylux' ),
				'slug'  => 'black',
				'color' => '#000000',
			),

		) );
	}
	endif;
	add_action( 'after_setup_theme', 'earlylux_setup', 11 );

	/**
	 * Eneuque ACF options page
	 *
	 */
	if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Archive Settings',
		'menu_title'	=> 'Issue Grid - Archive Page',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Menu Settings',
		'menu_title'	=> 'Menu',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Shop Settings',
		'menu_title'	=> 'Footer Shop',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

}


	/**
	 * Eneuque parent theme styles
	 *
	 */
	add_action( 'wp_enqueue_scripts', 'earlylux_enqueue_parent_styles' );


	function earlylux_enqueue_parent_styles() {

	   	// Parent Styles
		wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
	}

	/**
	 * Eneuque fonts
	 *
	 */
	add_action( 'wp_enqueue_scripts', 'earlylux_enqueue_fonts' );

	function earlylux_enqueue_fonts() {


		// Fonts
		wp_register_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,700;1,400;1,700&family=Nova+Mono' );
		wp_enqueue_style('googlefonts');


		wp_register_style('louize-205tf', get_stylesheet_directory_uri() . '/assets/fonts/louize-205tf/styles.css');
		wp_enqueue_style('louize-205tf');


		wp_register_style('authentic-sans', get_stylesheet_directory_uri() . '/assets/fonts/authentic-sans/styles.css');
		wp_enqueue_style('authentic-sans');

		wp_register_style('cancellaresca-script-std', get_stylesheet_directory_uri() . '/assets/fonts/cancellaresca-script-std/styles.css');
		wp_enqueue_style('cancellaresca-script-std');

	}




	/**
	 * Eneuque admin scripts
	 *
	 */
	 add_action( 'admin_enqueue_scripts', 'earlylux_enqueue_fonts' );
	add_action( 'admin_enqueue_scripts', 'earlylux_admin_enqueue_scripts' );

	function earlylux_admin_enqueue_scripts(){
		wp_register_script('acf-customizer', get_stylesheet_directory_uri() . '/assets/scripts/acf-customizer.js', array('jquery'), '', true);
		wp_enqueue_script('acf-customizer');
	}

	/**
	 * Eneuque custom JS script
	 *
	 */

	 add_action( 'wp_enqueue_scripts', 'lux2021_enqueue_scripts' );

	 function lux2021_enqueue_scripts(){
		 wp_register_script('custom', get_stylesheet_directory_uri() . '/assets/scripts/custom.js', array('jquery'), '', true);
		 wp_enqueue_script('custom');
	 }




	/**
	 * Remove comments from post meta at top of single posts
	 *
	 */
	function earlylux_display_custom_tags ($post_meta) {

		// delete meta tags you do not want to display
  		return array( 'author', 'post-date', 'sticky');

	}

	add_filter('twentytwenty_post_meta_location_single_top', 'earlylux_display_custom_tags');


	/**
	 * Override the colours added in the customiser.
	 *
	 * @param array $default An array of the key colours being used in the theme.
	 */
	// function earlylux_change_default_colours( $default ) {

	// 	$default = array(
	// 		'content'       => array(
	// 			'text'      => '#000000', /* black */
	// 			'accent' 	=> '#ae011e', /* lux red */
	// 			'secondary' => '#D7A0FF', /* lilac */
	// 			'borders'   => '#ae011e', /* lux red */
	// 			'background' => '#FFFFFF', /* cream */
	// 		),

	// 		'header-footer' => array(
	// 			'text'      => '#000000', /* white */
	// 			'accent' 	=> '#ae011e', /* lux red */
	// 			'secondary' => '#ffffff', /* lux red */
	// 			'borders'   => '#ac5134', /* lux red */
	// 			'background' => '#FFFFFF', /* cream */
	// 		),

	// 	);

	// 	return $default;
	// }

	// /* Hook into the colours added via the customiser. */
	// add_filter( 'theme_mod_accent_accessible_colors', 'earlylux_change_default_colours', 10, 1 );

	function earlylux_register_menus() {
  		register_nav_menu('subscribe-menu',__( 'Subscribe Menu' ));
	}
	add_action( 'init', 'earlylux_register_menus');


	/* Custom Blocks */


	add_action('acf/init', 'earlylux_init_block_types');
	function earlylux_init_block_types() {

		// Check function exists.
		if( function_exists('acf_register_block_type') ) {

			// register a testimonial block.
			acf_register_block_type(array(
				'name'              => 'toc-article',
				'title'             => __('TOC Article'),
				'description'       => __('Display an article hed/dek/lede.'),
				'render_template'   => 'template-parts/blocks/toc-article/toc-article.php',
				'category'          => 'formatting',
				'icon'              => 'pressthis',
				'keywords'          => array( 'toc', 'article','quote' ),
			));

			 acf_register_block_type(array(
            'name'              => 'body-article',
            'title'             => __('Body Article'),
            'description'       => __('Display an article hed/dek/lede.'),
            'render_template'   => 'template-parts/blocks/body-article/body-article.php',
            'category'          => 'formatting',
            'icon'              => 'pressthis',
            'keywords'          => array( 'body', 'article' ),
        	));

			 acf_register_block_type(array(
            'name'              => 'featured-article',
            'title'             => __('Featured Article'),
            'description'       => __('Display an article featued image/hed/dek/lede.'),
            'render_template'   => 'template-parts/blocks/featured-article/featured-article.php',
            'category'          => 'formatting',
            'icon'              => 'pressthis',
            'keywords'          => array( 'body', 'article' ),
        	));

			  acf_register_block_type(array(
            'name'              => 'capsule',
            'title'             => __('Capsule'),
            'description'       => __('Display a capsule featued image/hed/dek/lede.'),
            'render_template'   => 'template-parts/blocks/capsule/capsule.php',
            'category'          => 'formatting',
            'icon'              => 'pressthis',
            'keywords'          => array( 'body', 'article' ),
        	));

			 acf_register_block_type(array(
            'name'              => 'homepage-article',
            'title'             => __('Homepage Article'),
            'description'       => __('Display an article featued image/hed/dek/lede.'),
            'render_template'   => 'template-parts/blocks/homepage-article/homepage-article.php',
            'category'          => 'formatting',
            'icon'              => 'pressthis',
            'keywords'          => array( 'body', 'article' ),
        	));


			 acf_register_block_type(array(
            'name'              => 'homepage-mini-article',
            'title'             => __('Homepage Mini Article'),
            'description'       => __('Display an article featued image/hed/dek/lede.'),
            'render_template'   => 'template-parts/blocks/homepage-mini-article/homepage-mini-article.php',
            'category'          => 'formatting',
            'icon'              => 'pressthis',
            'keywords'          => array( 'body', 'article' ),
        	));

		}
	}

	/* Template Tags */

	/**
	 * Adds conditional body classes.
 	 *
 	 * @param array $classes Classes added to the body tag.
 	 * @return array Classes added to the body tag.
 	*/
 	add_filter( 'body_class', 'earlylux_body_classes' );
	function earlylux_body_classes( $classes ) {

		global $post;
		$post_type = isset( $post ) ? $post->post_type : false;

		// Check whether the current page should have an overlay header.
		if ( is_page_template( array( 'templates/template-front-cover.php' ) ) ) {
			$classes[] = 'overlay-header';
		}

		return $classes;
	}

	// Adds Dark Mode to Templates

	add_filter( 'body_class', 'wpse_20160118__body_class' );

function wpse_20160118__body_class( $classes ) {

    if ( $package_colour = get_field( 'dark_mode', get_queried_object_id() ) ) {

        $classes[]       = "dark_mode";
    }

    return $classes;
}

// Delete "author tag" from Opengraph

add_filter( 'oembed_response_data', 'disable_embeds_filter_oembed_response_data_' );
function disable_embeds_filter_oembed_response_data_( $data ) {
    unset($data['author_url']);
    unset($data['author_name']);
    return $data;
}





?>
