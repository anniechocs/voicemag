<!-- Template Part including card format to be included within The Loop  -->


		<section class="vert-card em-card">
			<div class="card-head">	

				<h4 class="event-datetime"><?php echo $EM_Event->output('#_EVENTDATES') . "&nbsp;" ; ?> 
		 			<?php // echo $EM_Event->output('#_12HSTARTTIME'); ?></h4>
		 	</div>
		 	<div class="flex-grow">									 		
	     	<?php 
					if ( has_post_thumbnail() ):
				$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

					list($width, $height) = getimagesize($url);
					if ($width > $height): ?>
					<a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>" >
					   	<div class="flex-img-holder">
							<img class="card-thmb-horiz" src="<?php echo $url; ?>"> 
						</div>
					</a>
					<?php else: ?>
					<a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>" >
					   	<div class="flex-img-holder flex-img-vert">
							<img class="card-thmb-vert" src="<?php echo $url; ?>"> 
						</div>
					</a>
					<?php endif;	?>

			<?php endif; ?>
				<a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>" >
					<h3> <?php the_title() ?> </h3>
				</a>												
				<?php echo $EM_Event->output('#_EVENTEXCERPT'); ?> 
			
			</div> <!-- .flex-grow -->

				<a  class="card-footer readmore" href="<?php the_permalink(); ?>" >
					read more...
				</a>
				
			</section>	
