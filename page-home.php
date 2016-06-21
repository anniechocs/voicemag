<?php
/**
 * Template Name: Home Page
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>


		<?php 
	while (have_posts()):
		the_post();

		get_template_part( 'template-parts/content', 'home' );

		endwhile;

		?>

		<!--the main posts -->	

<?php get_sidebar('left'); ?> 
				<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
					<main id="main" class="site-main" role="main">
	

			<?php   get_template_part( 'template-parts/homepages/content', 'moreposts' );
				echo "\n\n"; ?>

					</main>
				</div>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 


