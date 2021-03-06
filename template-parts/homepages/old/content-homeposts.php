<!-- Template Part for Home Styles. This is included in content-home.php  -->
		
	<!-- Main home page-->		
		<!-- find which homepage through custom field-->
     	<?php 
     	$field = "Area";
     	
			$catField =  get_post_meta($post->ID, $field, true);
				if ($catField != ''): 
					$area = $catField;
				endif;

		?>

			<div class="row row-with-vspace flex-row">	

			<?php 

				$args2 = array(
					'posts_per_page'=>6,
				'post_type'=>'event',
				'order'=>'ASC',
				'event-categories' => 'featured',
				'tax_query' => array(
					array(
						'taxonomy' => 'area',
						'field' => 'slug',
						'terms' => $area,
						//'terms' => array( 'monmouth', 'ross','chepstow' )
					)
				),
				'meta_query' => array(
									array(
									//	'key' => '_start_ts', change this to display until end-time
										'key' => '_end_ts',
										'value' => current_time('timestamp'),
										'compare' => '>=',
										'type'=>'numeric'
									)
								),

				'orderby' => 'meta_value_num',
				'order' => 'ASC',
				//'meta_key' => '_start_ts', // change this to display until end-time
				'meta_key' => '_end_ts',
				'meta_value' => current_time('timestamp'),
				'meta_value_num' => current_time('timestamp'),
				'meta_compare' => '>='
				);
			?>

			<?php $query2 = new WP_Query( $args2);
				$counter = 1;
	               
	                		while ( $query2->have_posts() ) {
										$query2->the_post();
										if (isset($do_not_duplicate)) {
											if ( in_array( $post->ID, $do_not_duplicate ) ) continue;
										}
										$EM_Event = em_get_event($post->ID, 'post_id');
										?>

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

									<?php 
										 if($counter == 3): ?>
												</div><div class="row flex-row">	 
										<?  endif; ?>

									<?php	$counter++ ;
									}   // end of while for query
										wp_reset_postdata(); ?>
</div> <!-- .row -->