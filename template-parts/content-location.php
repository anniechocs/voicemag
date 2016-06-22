<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
							<?php		$EM_Location = em_get_location($post->ID, 'post_id'); ?>
	<div class="entry-content">
		<div class="row row-with-vspace">
	<div id="event-left" class="col-sm-6">	

			<div class="event-image-holder">
				<?php echo $EM_Location->output('#_LOCATIONMAP'); ?> 
			</div>

		</div> <!-- end #event-left -->
		<div id="event-right" class="col-sm-6">
				<?php 
		     	$field = "contact-phone";
		     	$contactphone =  get_post_meta($post->ID, $field, true);
		     	$field = "contact-url";
				$contacturl =  get_post_meta($post->ID, $field, true);	
				$field = "place";
				$altplace =  get_post_meta($post->ID, $field, true);	
				$field = "tickets";
				$tickets =  get_post_meta($post->ID, $field, true);	?>
			<dl class="inline-deflist">
			<dt>Address: </dt>
			  <dd><?php echo $EM_Location->output('#_LOCATIONFULLBR') . "&nbsp;" ; ?> </dd>
		
			</dl>
			<dl>
			<?php if ($contactphone != ''): ?> 
				<dt>Contact: </dt><dd><?php echo $contactphone; ?></dd>	
			<?php endif; ?>
			<?php if ($contacturl != ''): ?> 
				<dt>Visit: </dt><dd><?php echo $contacturl; ?></dd>
			<?php endif; ?>
			</dl>

	</div> <!-- end #event-left -->
	</div>  <!--end row -->


	<div  class="row">
		<section class="event-notes location-list">
			<h2>Upcoming Events</h2>
				<?php echo $EM_Location->output('#_LOCATIONNEXTEVENTS'); ?> 

		</section>
	</div> <!-- end .row-->


	<div  class="row">
		<section class="event-notes">
				<?php echo $EM_Location->output('#_LOCATIONNOTES'); ?> 



		</section>
	</div> <!-- end .row-->

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

		<?php bootstrapBasicEditPostLink(); ?> 
	</footer>
<!-- 	<div class="clearfix"></div> -->
</article><!-- #post-## -->