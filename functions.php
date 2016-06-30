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

if (!function_exists('bootstrapBasicPostOn')) {
	/**
	* This over-rides the function of the same name in the parent theme
	 * which is found in bootsrap-basic/inc/template-tags.php
	 * display post date/time but NOT author
	 * 
	 * @return string
	 */
	function bootstrapBasicPostOn() 
	{
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		if (get_the_time('U') !== get_the_modified_time('U')) {
			$time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf($time_string,
			esc_attr(get_the_date('c')),
			esc_html(get_the_date()),
			esc_attr(get_the_modified_date('c')),
			esc_html(get_the_modified_date())
		);

		printf(__('<span class="posted-on">Posted on %2$s</span>', 'bootstrap-basic'),
			//sprintf('<a href="%1$s" title="%2$s" rel="bookmark">%3$s</a>',
			//	esc_url(get_permalink()),
				esc_attr(get_the_time()),
				$time_string
			);

	}// bootstrapBasicPostOn
}

// function register_new_menu() {
//   register_nav_menu('whats-on',__( 'Whats On' ));
// }
// add_action( 'init', 'register_new_menu' );

function register_new_menus() {
register_nav_menus( array(
	'header' => 'Header Menu',
	'footer-one' => 'Footer Menu One',
	'footer-three' => 'Footer Menu Three',
	'footer-two' => 'Footer Menu Two',
	'footer-four' => 'Footer Menu Four',
) );
}
add_action( 'init', 'register_new_menus' );

// // My function to display a menu with it's header
// function ild_header_menu($location){
// 		$menu_location = $location;
// 		$menu_locations = get_nav_menu_locations();
// 		$menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
// 		$menu_name = (isset($menu_object->name) ? $menu_object->name : '');
// 		echo '<h3>' . esc_html($menu_name) . '</h3>';
// 		wp_nav_menu( array( 'theme_location' => $location ) );
// }

// My function to display a menu with it's header
function ild_header_menu($location){
		$menu_location = $location;
		$menu_locations = get_nav_menu_locations();
		$menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
		$menu_name = (isset($menu_object->name) ? $menu_object->name : ''); 
		// echo  '<h3>' . esc_html($menu_name) . '</h3>';?>
		<div class="col-lg-2 col-sm-3 col-xs-6 footer-menu">
			<h3><?php echo esc_html($menu_name) ?></h3>
			<?php wp_nav_menu( array( 'theme_location' => $location, 'fallback_cb' => FALSE, ) ); ?>
		</div>
<?php
}
