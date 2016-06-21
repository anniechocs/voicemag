<!-- this template part and corresponding page page-locationlist.php are not needed
 	as everything can be set in events > settings > formatting > locations  -->
<?php
/**
 * Template Name: Location List
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>


		<!--the main posts -->	

<?php get_sidebar('left'); ?> 
				<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
					<main id="main" class="site-main" role="main">


		<?php 
	while (have_posts()):
		the_post();

			$taxterm = get_the_terms( get_the_ID(), 'area');									 
		if ( ! empty( $taxterm ) ):
		   get_template_part( 'template-parts/content', 'locationlist-area' );
		else:
			get_template_part( 'template-parts/content', 'locationlist' );
		endif;

		endwhile;

		?>	


					</main>
				</div>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 