<?php
/**
 *  Template Name: Past Events Page
 * Template for displaying  past events
 * @package bootstrap-basic-child
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
<?php get_sidebar('left'); ?> 

				<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<article id="all-churches-page" class="page">
						<?php while (have_posts()) {
							the_post(); ?>
							<header class="entry-header">
								<h1 class="entry-title"><?php the_title(); ?> </h1>  	
							</header>
	                			<?php 

							// get_template_part('content', get_post_format());
							// insted of loading "the_content()" which gives default Events page-

							get_template_part( 'template-parts/content', 'pastevent' );

							echo "\n\n";
							
							bootstrapBasicPagination();

							echo "\n\n";
							
							// If comments are open or we have at least one comment, load up the comment template
							if (comments_open() || '0' != get_comments_number()) {
								comments_template();
							}

							echo "\n\n";

								} //endwhile for page;
								?> 
						
						</article>

					<?php if ( function_exists('yoast_breadcrumb') ) { ?>
					<div class="breadcrumb">
						<?php yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>
					</div>
					<? } ?>
					</main>
				</div>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 