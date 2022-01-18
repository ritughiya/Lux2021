<?php

/**
 * Capsule Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'capsule-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'capsule';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$hed = get_field('capsule_hed') ?: 'Hed here...';
$author = get_field('capsule_author') ?: 'Author';
$body = get_field('capsule_body') ?: 'Body';
$background_color = get_field('background_color');

//$text_color = get_field('text_color');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
<div class="capsule-hed">
        <?php if($hed): ?>
       <?php echo $hed; ?>
        <?php endif; ?>
     </div>
     <div class="capsule-body">
        <?php if($body): ?>
       <?php echo $body; ?>
       <span class="capsule-author">
       	– <?php echo $author; ?>
       </span>
        <?php endif; ?>
    </div>
</div>