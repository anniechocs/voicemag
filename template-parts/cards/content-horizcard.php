<!-- Template Part including card format to be included within The Loop  -->


<section class="horiz-card em-card">											
	
     	<?php 
				if ( has_post_thumbnail() ):
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

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
				<h3> <?php the_title() ?> <span class="horiz-event-date">
					<?php echo $EM_Event->output('#_EVENTDATES'); ?> </span></h3>
			</a>
			<?php echo $EM_Event->output('#_EVENTEXCERPT'); ?> 

			<a  class="read-more" href="<?php the_permalink(); ?>" >
				read more...
			</a>
		
		</div> <!-- .card-right -->
		
		<?php else: ?>
			<div>
				<a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>" >
					<h3> <?php the_title() ?> </h3>
				</a>
				<?php echo $EM_Event->output('#_EVENTEXCERPT'); ?> 

				<a  class="read-more" href="<?php the_permalink(); ?>" >
					read more...
				</a>
			</div>	
		<?php endif; ?>
 
		
</section>	
