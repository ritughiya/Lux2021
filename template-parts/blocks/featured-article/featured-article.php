<?php

/**
 * Featured Article Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'featured-article-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'featured-article';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$callout = get_field('featured-article-callout') ?: 'Hed here...';
$hed = get_field('featured-article-hed') ?: 'Hed here...';
$dek = get_field('featured-article-dek') ?: 'Dek';
$lede = get_field('featured-article-lede') ?: 'Lede';
$byline = get_field('featured-article-author') ?: '';
$image = get_field('featured-article-image') ?: 295;
$img_id = get_post_thumbnail_id(get_the_ID());
$alt_text = get_post_meta($image['id'], '_wp_attachment_image_alt', true); 
$image_src = wp_get_attachment_image_src( $image['id'], 'large' );
$background_color = get_field('background_color');
$link = get_field('link_to_article');

//$text_color = get_field('text_color');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
          <?php if ($link) {  echo '<a href="' .  $link . '">';}?>

  	 <?php if($image) : ?>
  	  	<div class="featured-article-featured-image">
       		<?php echo wp_get_attachment_image( $image, 'full' ); ?>
   	 </div>
   	<?php endif; ?>

    <div class="featured-article-preview">
      <?php if($callout): ?>
       <?php echo $callout; ?>
        <?php endif; ?>
    </div>

    <div class="featured-article-text">
    	<h3 class="hed">
		<?php echo $hed; ?>
        </h3> 
      <?php if( get_field('dek') ): ?>
        <span class="dek"><?php echo $dek; ?></span>
        <?php endif; ?>

        
        <p class="lede"><?php echo $lede; ?>
        <?php if($byline) : ?>
        	<span class="byline">By <?php echo $byline; ?></span>
        <?php endif; ?>
        
        </p> 
        <?php if($link){echo '</a>';}?>
    </div>
   
     <!-- <style type="text/css">
        #<?php echo $id; ?> {
            background: <?php echo $background_color; ?>;
            color: <?php echo $text_color; ?>;
        }
    </style> -->
</div>