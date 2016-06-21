<!-- Template Part for Home Styles. This is included in content-home.php  -->
		<!-- Optional row of featured posts for home page-->		


			<div class="row flex-row">


			<?php 							
				$args1 = array(
					'posts_per_page'=>2,
				'post_type'=>'event',
				'order'=>'ASC',
				'event-categories' => 'featured',
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

				//$do_not_duplicate = array();
				); ?>

				               <?php $query1 = new WP_Query( $args1);		
				               while ( $query1->have_posts() ) {
										$query1->the_post();
										$do_not_duplicate[] = $post->ID;
										$EM_Event = em_get_event($post->ID, 'post_id');
										?>

										<section class="vert-card em-card">
											<div class="card-head">	
												<a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>" >
													<h3> <?php the_title() ?> </h3>
												</a>
												<h4 class="event-datetime"><?php echo $EM_Event->output('#_EVENTDATES') . "&nbsp;" ; ?> 
										 			<?php // echo $EM_Event->output('#_12HSTARTTIME'); ?></h4>
										 	</div>
										 	<div class="flex-grow">
									     	<?php 
				     							if ( has_post_thumbnail() ) {
												$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

													list($width, $height) = getimagesize($url);
													if ($width > $height) { ?>
													   	<div class="flex-img-holder">
															<img class="card-thmb-horiz" src="<?php echo $url; ?>"> 
														</div>
													<?php } else { ?>
													   	<div class="flex-img-holder flex-img-vert">
															<img class="card-thmb-vert" src="<?php echo $url; ?>"> 
														</div>
													<?php }	?>


											<?php } //end of if ?>
												<?php echo $EM_Event->output('#_EVENTEXCERPT'); ?> 
											
											</div> <!-- .flex-grow -->

									       <p class="card-footer event-place">
												<?php echo $EM_Event->output('#_LOCATIONNAME'); ?>
									       </p>
												
				     					</section>	


									<?php	}   // end of while for query
										wp_reset_postdata(); ?>	 

			</div> <!--  end of first flex row	 -->
