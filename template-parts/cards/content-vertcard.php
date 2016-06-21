<!-- Template Part including card format to be included within The Loop  -->


										<section class="vert-card em-card">
											<div class="card-head">	

												<h4 class="event-datetime"><?php echo $EM_Event->output('#_EVENTDATES') . "&nbsp;" ; ?> 
										 			<?php // echo $EM_Event->output('#_12HSTARTTIME'); ?></h4>
								 			</div>
									     	<?php 
				     							if ( has_post_thumbnail() ):
												$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

													list($width, $height) = getimagesize($url);
													if ($width > $height): ?>													
													<div class="flex-img-holder">
													   		<a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>" >
																<img class="card-thmb-horiz" src="<?php echo $url; ?>"> 
															</a>
													</div>													
													<?php else: ?>
													
													<div class="flex-img-holder flex-img-vert">
														<a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>" >
															<img class="card-thmb-vert" src="<?php echo $url; ?>"> 
														</a>
													</div>
													
													<?php endif;	?>

											<?php endif; ?>


										 	<div class="flex-grow">	
												<a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>" >
													<h3> <?php the_title() ?> </h3>
												</a>												
												<?php echo $EM_Event->output('#_EVENTEXCERPT'); ?> 
											
											</div> <!-- .flex-grow -->

												<a  class="card-footer readmore" href="<?php the_permalink(); ?>" >
													read more...
												</a>
												
				     					</section>	
