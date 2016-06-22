<?php
/**
 * Template for pages without sidebar
 * Template Name: Full Width Page
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * template copied from page.php of parent theme
 */

?> 

	<div class="col-md-12 content-area" id="main-column">
		<main id="main" class="site-main" role="main">
			<?php 
			while (have_posts()) {
				the_post();

				get_template_part('content', 'page');

				echo "\n\n";
				
				// If comments are open or we have at least one comment, load up the comment template
				if (comments_open() || '0' != get_comments_number()) {
					comments_template();
				}

				echo "\n\n";

			} //endwhile;
			?> 
		</main>
	</div>

<?php get_footer(); ?> 