<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title">What's On <?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">


		<!--the main posts -->		

			<?php get_template_part( 'template-parts/homepages/content', 'homeposts' );
				echo "\n\n"; ?>
			<?php get_template_part( 'template-parts/homepages/content', 'featureposts' );
				echo "\n\n"; ?>

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
    <ul class="see-also also-whatson">
        <?php echo  $children; ?>
    </ul>
<?php endif; ?>


		<?php bootstrapBasicEditPostLink(); ?> 
	</footer>
<!-- 	<div class="clearfix"></div> -->
</article><!-- #post-## -->