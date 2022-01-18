<div class="issue-grid" style="background-color:<?php the_field('issuegrid_bgcolor', 'option') ?> !important">

<?php


if ( have_rows( 'issues', 'option' ) ) : ?>

		<?php while ( have_rows( 'issues', 'option' ) ) : the_row();

			// Services Sub Repeater.
			if ( have_rows( 'addingissues' ) ) : ?>

			<ul class="issues">

			       <?php
			       while ( have_rows( 'addingissues' ) ) : the_row();

				       $image = get_sub_field( 'issuegrid_cover' );
				       $title = get_sub_field( 'issuegrid_number' );
				       $url = get_sub_field( 'issuegrid_link' );

			       ?>

				<li class="issue-single">
					<a href="?_sfm_issue_number_sort=Issue%20<?php echo esc_html( $url ); ?>">
					<img src="<?php echo esc_url( $image['sizes']['large'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>"?>
					<div class="issue-title"><?php echo esc_html( $title ); ?></div>
					</a>
				</li>

			       <?php endwhile; ?> 
			</ul>

		       <?php endif; ?>
		<?php endwhile; ?>
<?php endif; ?>


</div>