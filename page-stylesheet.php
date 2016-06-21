<?php
/**
 * Template Name: Style Sheet Page
 * Template for stylesheet
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
<?php get_sidebar('left'); ?> 
				<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">


					<div class="col-md-12 content-area" id="main-column">
					<main id="main" class="site-main" role="main">

					<?php 
						while (have_posts()) {
							the_post();

							// Include the stylesheet page content templates.

							get_template_part( 'template-parts/content', 'styles' );

							echo "\n\n";
							
							// If comments are open or we have at least one comment, load up the comment template
							if (comments_open() || '0' != get_comments_number()) {
								comments_template();
							}

							echo "\n\n";

						} //endwhile;
						?> 	
						 
						
	 

	
	<footer class="entry-meta">
		 
		<div class="entry-meta-category-tag">
			 
			<span class="cat-links">
				<span class="categories-icon glyphicon glyphicon-th-list" title="Posted in"></span> <a href="https://wp-themes.com/?cat=1" rel="category">Uncategorized</a> 
			</span>
			 

			 
		</div><!--.entry-meta-category-tag-->
		 

		<div class="entry-meta-comment-tools">
			 
			<span class="comments-link"><a href="https://wp-themes.com/?p=1#comments" class="btn btn-default btn-xs"><span class="comment-icon glyphicon glyphicon-comment"><small class="comment-total">2</small></span></a></span>
			 

			<a class="post-edit-link btn btn-default btn-xs" href="" title="Edit"><i class="edit-post-icon glyphicon glyphicon-pencil" title="Edit"></i></a> 
		</div><!--.entry-meta-comment-tools-->
	</footer><!-- .entry-meta -->

</article><!-- #post-## --> 
						 
					</main>
				</div>


				</div>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 