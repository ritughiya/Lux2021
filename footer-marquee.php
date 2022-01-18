

<div class="footershopcontainer">
    <div class="footershop-content" style="">
 <?php
$image1 = get_field('footer_shop_img_1', 'option');
$link1 = get_field('footer_shop_url_1', 'option');
if( !empty( $image1 ) ): ?>
     <div class="footershop-item hvr-grow-rotate" data-aos="zoom-in"  data-aos-delay="0">
      <a href="<?php echo esc_url( $link1 ); ?>" target="_blank">
    <img class="hvr-grow-rotate1" src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" />
  </a>
     </div>

<?php endif; ?>

 <?php
$image2 = get_field('footer_shop_img_2', 'option');
$link2 = get_field('footer_shop_url_2', 'option');
if( !empty( $image2 ) ): ?>
     <div class="footershop-item " data-aos="zoom-in"  data-aos-delay="15">
     <a href="<?php echo esc_url( $link2 ); ?>" target="_blank">
    <img class="hvr-grow-rotate" src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
  </a>
     </div>

<?php endif; ?>

 <?php
$image3 = get_field('footer_shop_img_3', 'option');
$link3 = get_field('footer_shop_url_3', 'option');
if( !empty( $image3 ) ): ?>
     <div class="footershop-item hvr-grow-rotate desktop2" data-aos="zoom-in"  data-aos-delay="10">
           <a href="<?php echo esc_url( $link3 ); ?>" target="_blank">
    <img class="hvr-grow-rotate1" src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" />
  </a>
     </div>

<?php endif; ?>

 <?php
$image4 = get_field('footer_shop_img_4', 'option');
$link4 = get_field('footer_shop_url_4', 'option');
if( !empty( $image4 ) ): ?>
     <div class="footershop-item hvr-grow-rotate desktop1" data-aos="zoom-in"  data-aos-delay=30>
           <a href="<?php echo esc_url( $link4 ); ?>" target="_blank">
    <img class="hvr-grow-rotate" src="<?php echo esc_url($image4['url']); ?>" alt="<?php echo esc_attr($image4['alt']); ?>" />
  </a>
     </div>

<?php endif; ?>



</div>
</div>
