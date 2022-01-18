<?php /* Template Name: archive */ ?>

<script>

</script>

<?php get_header('archive'); ?>

<div id="content" role ="main">
<?php get_header('issuegrid'); ?>

<?php get_header('discover'); ?>




<div id="container">
	<div class="gallery-grid" >

	<div class="articles-list">


		<?php

		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<a href="<?php echo  the_permalink() ?>">
	<div class="gridsingle-article">

		<div class="article-number">
		<?php if( get_field('issuenumber') ): ?>
		<?php
		$issuenumber = get_field('issuenumber');
		$number = $issuenumber['label'];
		$color = $issuenumber['value']; ?>
		00<?php echo $number; ?>
		<?php endif; ?>
		 </div>
		<?php $title= get_the_title(); ?>
		<div class="article-title"><?php echo $title; ?></div>

		<div class="article-author"><?php the_field('archive_author'); ?></div>

	 </div>

</a>

<?php endwhile; else: ?>

 <div class="searchandfilter">
                <h4>Sorry, no posts to list</h4></div>

<?php endif; ?>


	</div><!-- #content -->
</div><!-- #container -->
</div>
</div>
</main>
<div class="footer-space"></div>
<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
