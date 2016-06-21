<!-- Template Part for Home Styles. This is included in content-home.php and content-area.php  -->
		
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
					'posts_per_page'=>3,
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
				// $counter = 1;
	               
	                		while ( $query2->have_posts() ) {
										$query2->the_post();
										if (isset($do_not_duplicate)) {
											if ( in_array( $post->ID, $do_not_duplicate ) ) continue;
										}
										$EM_Event = em_get_event($post->ID, 'post_id');
										?>

									<?php include(locate_template('template-parts/cards/content-vertcard.php')); ?>

									<?php 
										// if($counter == 3): ?>
												<!-- </div><div class="row flex-row">	 --> 
										<? // endif; ?>

									<?php	//$counter++ ;
									}   // end of while for query
										wp_reset_postdata(); ?>
</div> <!-- .row -->