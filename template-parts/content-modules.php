<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?> 
		<div class="clearfix"></div>

	<p><!-- Template Part for Sample Modules --></p>

	<article id="modulestyles" class="post type-post styles-post">

		<div id="module-styles-1" class="entry-content">

			<?php get_template_part( 'template-parts/styles/content', 'headerstyles' );
				echo "\n\n"; ?>

			<?php get_template_part( 'template-parts/styles/content', 'modulestyles2' );
				echo "\n\n"; ?>

			<div id="mod-nav" class="row style-module">
				<h3>Example Plain Style Navigation</h3>
				<nav id="reset-style" class="navbar navbar-default" role="navigation">
					<?php get_template_part( 'template-parts/styles/content', 'navstyles' );
					echo "\n\n"; ?>	
				</nav>	

				<h3>Example Gradient Navigation</h3>
				<nav id="magor-style" class="navbar navbar-default" role="navigation">
					<?php get_template_part( 'template-parts/styles/content', 'navstyles' );
					echo "\n\n"; ?>	
				</nav>		
			</div><!-- .row -->

			<?php get_template_part( 'template-parts/styles/content', 'cardstyles' );
				echo "\n\n"; ?>


		</div><!-- .entry-content -->

	</article>



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