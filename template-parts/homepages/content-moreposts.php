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

			<div class="row flex-row">	

			<?php 

				$args2 = array(
					'posts_per_page'=>6,
				'post_type'=>'event',
				'order'=>'ASC',
				'event-categories' => $area,
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
	                		while ( $query2->have_posts() ): 
										$query2->the_post();
										$EM_Event = em_get_event($post->ID, 'post_id');
										?>

					<?php include(locate_template('template-parts/cards/content-horizcard.php')); ?>
										


			<?php  endwhile;
				wp_reset_postdata(); ?>

</div> <!-- .row -->