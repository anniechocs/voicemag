<?php get_header(); ?> 

				<div class="col-md-12 content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title"><?php _e('We have a new website', 'bootstrap-basic'); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">
								<p><?php _e('It looks like nothing was found at this location; this may have happened because you were automatically redirected from our old website. <br>Go to our Welcome Page or try one of the links below.', 'bootstrap-basic'); ?></p>


								<a class="btn btn-general" href="<?php echo esc_url(home_url('/')); ?>">Home Page</a>
								<p><br><br></p>

								<!--search form-->
								<form class="form-horizontal" method="get" action="<?php echo esc_url(home_url('/')); ?>" role="form">
									<div class="form-group">
										<div class="col-xs-6">
											<input type="text" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'bootstrap-basic'); ?>" title="<?php echo esc_attr_x('Search &hellip;', 'label', 'bootstrap-basic'); ?>" class="form-control" />
										</div>
										<div class="col-xs-2">
											<button type="submit" class="btn btn-default"><?php _e('Search', 'bootstrap-basic'); ?></button>
										</div>
									</div>
								</form>

								<div class="row">
									<div class=" col-sm-6 col-md-3">
										<?php the_widget('WP_Widget_Recent_Posts'); ?> 
									</div>
									<div class=" col-sm-6">
										<div class="widget widget_categories">
											<h2 class="widgettitle"><?php _e('Useful Pages', 'bootstrap-basic'); ?></h2>
											<ul>
												<?php
											/*wp_list_categories(array(
													'orderby' => 'count',
													'order' => 'DESC',
													'show_count' => 1,
													'title_li' => '',
													'number' => 10,*/

											Wp_list_pages(array(
										'depth' => 1,
										'title_li' => '',
										'include'  => array( 47, 20, 22, 23, 21, 483, 24 )
																						));

												?> 
											</ul>
										</div><!-- .widget -->
									</div>
									<div class=" col-sm-6 col-md-3">
										<?php
										/* translators: %1$s: smiley */
										$archive_content = '<p>' . sprintf(__('Try looking in the monthly archives. %1$s', 'bootstrap-basic'), convert_smilies(':)')) . '</p>';
										/*the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content");*/
										?> 
									</div>
									<div class=" col-sm-6 col-md-3">
										<?php the_widget('WP_Widget_Tag_Cloud'); ?> 
									</div>
								</div>
							</div><!-- .page-content -->
						</section><!-- .error-404 -->
					</main>
				</div>

<?php get_footer(); ?> 