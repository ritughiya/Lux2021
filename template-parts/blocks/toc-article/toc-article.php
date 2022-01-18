<?php

/**
 * TOC Article Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'toc-article-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'toc-article';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$hed = get_field('toc-article-hed') ?: 'Hed here...';
$dek = get_field('toc-article-dek') ?: 'Dek';
$lede = get_field('toc-article-lede') ?: 'Lede';
$byline = get_field('toc-article-author') ?: '';
$image = get_field('toc-article-image') ?: 295;
$background_color = get_field('background_color');
$link = get_field('link_to_article');

//$text_color = get_field('text_color');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
  	<!-- <?php if($image) : ?>
  	  	<div class="article-featured-image">
       		<?php echo wp_get_attachment_image( $image, 'full' ); ?>
   	 </div>
   	<?php endif; ?>-->
  
    <div class="toc-article-text">
    	<h3 class="hed">
       	<?php if ($link) {  echo '<a href="' .  $link . '">';}?>
		<?php echo $hed; ?><?php if($link){echo '</a>';}?>
        </h3> 
        <span class="dek"><?php echo $dek; ?></span>
        
        
        <p class="lede"><?php echo $lede; ?>
        <?php if($byline) : ?>
        	<span class="byline">By <?php echo $byline; ?></span>
        <?php endif; ?>
        
        </p> 
    </div>
   
     <!-- <style type="text/css">
        #<?php echo $id; ?> {
            background: <?php echo $background_color; ?>;
            color: <?php echo $text_color; ?>;
        }
    </style> -->
</div>