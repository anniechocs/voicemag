<?php
/**
 * Bootstrap Basic theme
 * 
 * @package bootstrap-basic
 */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

if (!function_exists('bootstrapBasicGetMainColumnSize')) {
	/**
	 * Determine main column size from actived sidebar
	 * 
	 * This over-rides the function of the same name in the parent theme
	 * which is found in bootsrap-basic/inc/template-functions.php
	 * Change reflects the fact that sidebar right is now 4 cols rather than 3
	 * in file sidebar-right.php
	 * 
	 * @return integer return column size.
	 */
	function bootstrapBasicGetMainColumnSize() 
	{
		if (is_active_sidebar('sidebar-left') && is_active_sidebar('sidebar-right')) {
			// if both sidebar actived.
			$main_column_size = 5;
		} elseif (
				(is_active_sidebar('sidebar-left') && !is_active_sidebar('sidebar-right')) 
		) {
			// if only left sidebar actived.
			$main_column_size = 9;
		} elseif (
				(is_active_sidebar('sidebar-right') && !is_active_sidebar('sidebar-left'))
		) {
			// if only right sidebar actived.
			$main_column_size = 8;
		} else {
			// if no sidebar actived.
			$main_column_size = 12;
		}

		return $main_column_size;
	}// bootstrapBasicGetMainColumnSize
}

function register_new_menu() {
  register_nav_menu('whats-on',__( 'Whats On' ));
}
add_action( 'init', 'register_new_menu' );

