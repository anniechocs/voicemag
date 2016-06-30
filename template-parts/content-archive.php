<article id="post-<?php the_ID(); ?>" >

	<div class="entry-content">
		<section class="horiz-card em-card">	
			<?php 	if ( has_post_thumbnail() ):
					$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
					endif; 
					if ($url != ''): ?>										
				<div class="card-left">	

						<?php list($width, $height) = getimagesize($url);
						if ($width > $height): ?>
						   	<div class="flex-img-holder">
								<img class="card-thmb-horiz" src="<?php echo $url; ?>"> 
							</div>
						<?php else: ?>
						   	<div class="flex-img-holder flex-img-vert">
								<img class="card-thmb-vert" src="<?php echo $url; ?>"> 
							</div>
						<?php endif;	?>				
		 		</div>

		 	<div class="card-right">
				<a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>" >
					<h3> <?php the_title() ?> </h3>
				</a>
				<?php the_excerpt(); ?> 

				<a  class="read-more" href="<?php the_permalink(); ?>" >
					read more...
				</a>
			
			</div> <!-- .card-right -->
		<?php else: ?>
			<div>
				<a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>" >
					<h3> <?php the_title() ?> </h3>
				</a>
				<?php the_excerpt(); ?> 

				<a  class="read-more" href="<?php the_permalink(); ?>" >
					read more...
				</a>
			</div>	
		<?php endif; ?>
				
		</section>	
		<div class="clearfix"></div>
		<?php
		/**
		 * This wp_link_pages option adapt to use bootstrap pagination style.
		 * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
		 */
		wp_link_pages(array(
			'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic') . ' <ul class="pagination">',
			'after'  => '</ul></div>',
			'separator' => ''
		));
		?>
	</div><!-- .entry-content -->
	<div class="clearfix"></div>
	

</article><!-- #post-## -->