
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<style>
    /*Capsules styling*/


.template-capsules .entry-title{
  color: <?php the_field('capsule_color'); ?>;
  font-family: "Cancellaresca-Script-Std";
    text-transform: none;
    font-weight: 400;
    font-size: 7.5rem;
    text-align: center;
}

.wp-block-columns.capsule-columns{
    display:revert;
}

 .capsule-columns {
          column-rule-width: 1px;
    -webkit-columns: 3 400px;
    -moz-columns: 3 400px;
    column-gap: 3em;
    columns: 3 200px;
    -webkit-column-rule: 2px solid <?php the_field('capsule_color'); ?>;
    -moz-column-rule: 2px solid <?php the_field('capsule_color'); ?>;
    column-rule: 2px solid <?php the_field('capsule_color'); ?>;
    margin-top: 0 !important;
    display:revert;
    max-width:1200px !important;
        border-top: 2px solid <?php the_field('capsule_color'); ?>;
    border-bottom: 2px solid <?php the_field('capsule_color'); ?>;
    padding-top: 3rem;
    padding-bottom: 3rem;
 }

 .capsule-columns .wp-block-column:not(:first-child) {
    margin-left: 0em;
}

.capsule-columns .wp-block-column:nth-child(2){
  display:inline-block;
}

.capsule-columns .wp-block-column:nth-child(3){
  display:inline;
}

.capsule-fullwidth .wp-block-image img{
      margin: 0 auto;
}

.capsule-hed{
      font-family: 'authentic-sans-condensed', monospace;
    text-transform: uppercase;
    letter-spacing: .1em;
    font-weight: 400;
    text-align: center;
    margin-bottom: 2rem;
}

.capsule-body{
      font-family: 'authentic-sans-condensed', monospace;
    letter-spacing: .03em;
    font-weight: 400;
    margin-bottom: 2rem;
    font-size:0.9em;
}

.capsule-author{
        font-family: 'authentic-sans-condensed', monospace;
    text-transform: uppercase;
    letter-spacing: .1em;
    font-weight: 400;
    text-align: center;
    margin-bottom: 2rem;
        font-size:0.9em;
        white-space: nowrap;

}

.headerlinks{
  font-family: 'authentic-sans-condensed', monospace;
    text-transform: uppercase;
    letter-spacing: .1em;
    font-weight: 400;
    text-align: center;
    margin-top:-4vh !important;
 }

.headerlinks a{
  border-bottom:0 !important;
  padding:5px 10px;
  background-color: <?php the_field('capsule_color'); ?>;
    color: <?php the_field('capsule_neutral'); ?> !important;
    margin-bottom: 3px !important;
    display: inline-block;
}

.Issuejump{
  font-family: 'authentic-sans-condensed', monospace;
    text-transform: uppercase;
    letter-spacing: .1em;
    font-weight: 400;
 }

.Issuejump a{
  border-bottom:0 !important;
  padding:5px 10px;
  background-color: <?php the_field('capsule_color'); ?>;
    color: <?php the_field('capsule_neutral'); ?> !important;
    margin-bottom: 3px;
    display: inline-block;
}

@media (max-width: 599px){
  .capsule-columns .wp-block-column:nth-child(2){
  border-top: 2px solid <?php the_field('capsule_color'); ?>;
}

.capsule-columns .wp-block-column:nth-child(3){
  border-top: 2px solid <?php the_field('capsule_color'); ?>;
  display:block;
}

.capsule-columns .wp-block-column{
  padding: 2vh 0;
}
}
</style>

    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <meta name="theme-color" content="#ffffff">
        <link rel="profile" href="https://gmpg.org/xfn/11">

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?> style="background-color:<?php the_field('article_background_color'); ?>">

        <?php
        wp_body_open();
        ?>
        <header style="background-color:<?php the_field('article_background_color') ?> !important; color:<?php the_field('article_text_color') ?>" id="site-header" class="newHeader header-footer-group" role="banner">

            <div class="header-inner section-inner ">

                <div class="header-titles-wrapper">

                    <?php

                    // Check whether the header search is activated in the customizer.
                    $enable_header_search = get_theme_mod( 'enable_header_search', true );

                    if ( true === $enable_header_search ) {

                        ?>

                        <button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
                            <span class="toggle-inner">
                                <span class="toggle-icon">
                                    <?php twentytwenty_the_theme_svg( 'search' ); ?>
                                </span>
                                <span class="toggle-text"><?php _ex( 'Search', 'toggle text', 'twentytwenty' ); ?></span>
                            </span>
                        </button><!-- .search-toggle -->

                    <?php } ?>

                    <div class="header-titles">

                        <?php
                            // Site title or logo.
                            twentytwenty_site_logo();

                            // Site description.
                            twentytwenty_site_description();
                        ?>

                    </div><!-- .header-titles -->

                    <button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
                        <span class="toggle-inner">
                            <!-- <span class="toggle-icon">
                                <?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
                            </span> -->
                            <span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
                        </span>
                    </button><!-- .nav-toggle -->

                </div><!-- .header-titles-wrapper -->

                <style>
                .header-marquee div{
                  animation: marquee <?php the_field('callout_marquee_speed', 'option') ?>s linear infinite !important;
                }
                </style>

                                <div class="header-marquee-container">
                                                        <div class="header-marquee">
        <div>

                                                            <?php

// check if the repeater field has rows of data
if( have_rows('callout_marquee','option') ):

    // loop through the rows of data
    while ( have_rows('callout_marquee','option') ) : the_row();?>

            <span style="color: <?php the_sub_field('callout_color', 'option'); ?>"><?php

        // display a sub field value
        the_sub_field('callout_text','option');

        ?> </span>
            <?php

    endwhile;

else :

    // no rows found

endif;

?>


                            </div></div></div>

                <div class="header-navigation-wrapper">

                    <?php
                    if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
                        ?>

                            <nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'twentytwenty' ); ?>" role="navigation">

                                <ul class="primary-menu reset-list-style">

                                <?php
                                if ( has_nav_menu( 'primary' ) ) {

                                    wp_nav_menu(
                                        array(
                                            'container'  => '',
                                            'items_wrap' => '%3$s',
                                            'theme_location' => 'primary',
                                        )
                                    );

                                } elseif ( ! has_nav_menu( 'expanded' ) ) {

                                    wp_list_pages(
                                        array(
                                            'match_menu_classes' => true,
                                            'show_sub_menu_icons' => true,
                                            'title_li' => false,
                                            'walker'   => new TwentyTwenty_Walker_Page(),
                                        )
                                    );

                                }
                                ?>

                                </ul>

                            </nav><!-- .primary-menu-wrapper -->

                        <?php
                    }

                    if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
                        ?>

                        <div class="header-toggles hide-no-js">

                        <?php
                        if ( has_nav_menu( 'expanded' ) ) {
                            ?>

                            <div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

                                <button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
                                    <span class="toggle-inner">
                                        <span class="toggle-text" style=" color:<?php the_field('article_text_color') ?>"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
                                        <span class="toggle-icon">
                                            <?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
                                        </span>
                                    </span>
                                </button><!-- .nav-toggle -->

                            </div><!-- .nav-toggle-wrapper -->

                            <?php
                        }

                        if ( true === $enable_header_search ) {
                            ?>

                            <div class="toggle-wrapper search-toggle-wrapper">

                                <button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
                                    <span class="toggle-inner">
                                        <?php twentytwenty_the_theme_svg( 'search' ); ?>
                                        <span class="toggle-text"><?php _ex( 'Search', 'toggle text', 'twentytwenty' ); ?></span>
                                    </span>
                                </button><!-- .search-toggle -->

                            </div>

                            <?php
                        }
                        ?>

                        </div><!-- .header-toggles -->
                        <?php
                    }
                    ?>

                </div><!-- .header-navigation-wrapper -->

            </div><!-- .header-inner -->

            </div><!-- .header-inner -->

            <?php
            // Output the search modal (if it is activated in the customizer).
            if ( true === $enable_header_search ) {
                get_template_part( 'template-parts/modal-search' );
            }
            ?>

        </header><!-- #site-header -->

        <?php
        // Output the menu modal.
        get_template_part( 'template-parts/modal-menu' );?>
