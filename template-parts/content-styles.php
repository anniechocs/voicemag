<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?> 
		<div class="clearfix"></div>


	<p><!-- Template Part for Sample Colours --></p>
	<?php get_template_part( 'template-parts/styles/content', 'colourstyles' );
		echo "\n\n"; ?>

	<?php // get_template_part( 'template-parts/styles/content', 'colourvariations' );
		// echo "\n\n"; ?> 

	<p><!-- Template Part for General Styles --></p>
	<?php get_template_part( 'template-parts/styles/content', 'generalstyles' );
		echo "\n\n"; ?>

	






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
	
	<footer class="entry-meta">
		<?php bootstrapBasicEditPostLink(); ?> 
	</footer>
<!-- 	<div class="clearfix"></div> -->
</article><!-- #post-## -->