<?php /* Template Name: random */ ?>
 
<?php get_header('new'); ?>

<?php get_header('issuegrid'); ?>





<div id="container">
	<div id="content main" class="gallery-grid" role="main">
		
	<div class="articles-list">


		<?php 

		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<a href="<?php echo  the_permalink() ?>"> 
	<div class="gridsingle-article">
   
		<div class="article-date"><?php the_field('date_published'); ?></div>
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
		<div class="article-author">
		<?php 

		$authors = get_field('article_author'); // your Relationship field

		if( $authors ) {
		    foreach( $authors as $post) {
		        setup_postdata($post); 
		        the_title();
		    }
		    wp_reset_postdata(); 
		}

		?>
	</div>
	 </div>

</a>

<?php endwhile; else: ?>

 <div class="searchandfilter">
                <h4>Sorry, no posts to list</h4></div>

<?php endif; ?>
		

	</div><!-- #content -->
</div><!-- #container -->

<div class="footer-space"></div>
<?php get_footer(); ?>
