    <div class="breadcrumbs">

        <?php if( get_field('issuenumber') ): ?>
        <?php 
        $issuenumber = get_field('issuenumber');
        $number = $issuenumber['label'];
        $color = $issuenumber['value']; ?>  
        <a href="/archive/?_sfm_issue_number_sort=Issue%20<?php echo esc_html( $number ); ?>"><span style="color:<?php echo $color; ?>">Issue <?php echo $number; ?>,</span> </a>
        <?php endif; ?>
    <?php 
    $id = get_the_ID();
    $cats = get_the_category($id);
    // $issue = get_field('issue', $id);
    // echo ( count($cats) == 1  ? 'Category: ' : 'Categories: ');
    $c = 0; $n = 0;
    $c = count($cats);
    foreach ( $cats as $cat ):
        $n++; 
        $str = strtolower($cat->name);
        $str = str_replace(' ', '', $str);
                $str = str_replace(['/','-'],'-',$str);?>
        <a style="color:<?php the_field('article_text_color') ?>;" href="/?sfid=1498&_sft_category=<?php echo $str; ?>">
            <?php echo $cat->name; echo ( $n > 0 && $n < $c ? ', ' : ''); ?>
        </a>
    <?php endforeach; ?>

    </div>