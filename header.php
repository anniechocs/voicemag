<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<!--wordpress head-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

				
		<div class="container page-container">
			<?php do_action('before'); ?> 
			<header role="banner">

			<div class="row" id="header-container">
				<div class="header-picture">
				<div class="logo-box">
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
							<img id="site-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Voice-Magazines-Logo-White.png" alt="The Voice Magazines logo">
						</a>
						<div class="site-description whats-on-menu">
								<?php // bloginfo('description'); ?> 
							<ul class="header-mag-list">
								<li>Ross Voice</li>
								<li>Monnow Voice</li>
								<li>Chepstow &amp; Forest Voice</li>
							</ul>

						</div>
				</div>
			</div>

				
					


			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
						<div id="menu-btn-left">
							<h2>Menu</h2>
						</div>
						<div id="menu-btn-right">
							<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
					</div>
					</button>
				</div>
				
				<div class="collapse navbar-collapse navbar-primary-collapse">
					<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
					<?php dynamic_sidebar('navbar-right'); ?> 
				</div><!--.navbar-collapse-->
			</nav>		
				

		</div> <!-- end header container .row -->


		</header>
			
			
			<div id="content" class="row row-with-vspace site-content">