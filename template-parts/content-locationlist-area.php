<!-- this template part and corresponding page page-locationlist.php are not needed
 	as everything can be set in events > settings > formatting > locations  -->


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
<?php the_content(); ?>

<?php			

		$taxterm = get_the_terms( get_the_ID(), 'area');									 
		if ( ! empty( $taxterm ) ):
		 	$area = esc_html( $taxterm[0]->name );  
		endif; 

		?>

		<!--the main posts -->		
<div class="row">

			<?php 

				$args1 = array(
					'posts_per_page'=> 50,
					'post_type'=>'location',
					'orderby' => 'title',
					'order' => 'ASC',
					'tax_query' => array(
						array(
							'taxonomy' => 'area',
							'field' => 'slug',
							'terms' => $area,
							//'terms' => array( 'monmouth', 'ross','chepstow' )
						)
					),
				);

			?>

			<?php $query1 = new WP_Query($args1); ?>
	               <dl class="inline-deflist">
	                	<?php	while ( $query1->have_posts() ):
										$query1->the_post();
										$EM_Location = em_get_location($post->ID, 'post_id'); ?>

								<dt><a href="<?php echo $EM_Location->output('#_LOCATIONURL'); ?>">
										<?php echo $EM_Location->output('#_LOCATIONNAME'); ?>
								 </a></dt> 
								 <dd><?php echo $EM_Location->output('#_LOCATIONTOWN'); ?></dd>
								 <!-- <dd><?php //echo $EM_Location->output('#_LOCATIONTOWN'); ?></dd> -->

									<?php	
										endwhile;
										wp_reset_postdata(); ?>

					</dl>	
</div> <!-- .row -->

<?php bootstrapBasicPagination(); ?> 

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


	
	<footer class="entry-meta row post-footer">

		<?php   get_template_part( 'template-parts/breadcrumbs' );
		echo "\n\n"; ?>
		<h4>See also:</h4>

<?php
if ( $post->post_parent ) {
    $children = wp_list_pages( array(
        'title_li' => '',
        'child_of' => $post->post_parent,
        'exclude' => $post->ID,
        'echo'     => 0
    ) );
} 
 
if ( $children ) : ?>
    <h2><?php echo $title; ?></h2>
    <ul class="see-also">
        <?php echo  $children; ?>
    </ul>
<?php endif; ?>

		<?php bootstrapBasicEditPostLink(); ?> 
	</footer>
<!-- 	<div class="clearfix"></div> -->
</article><!-- #post-## -->