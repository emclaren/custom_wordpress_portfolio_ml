<?php
/**
 * The header for our theme.
 * 
 * @package mlenizky_custom
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<!-- Fixed Navigation Bar -->
		<div class="fixed-nav-bar  arrow-box floating-arrow" id="nav-bar">
			<nav id="site-navigation" class="navigation " role="navigation">
			
				<a href="about" > 
					<div class="home-link ">
						<img src="http://michaellenizky.
						com/wp-content/uploads/2015/12/MIkes-Logo-white.png">
						<h3>Michael J.P. Lenizky</h3>
					</div>
				</a>
				
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>
		<!--Static Header -->
		<div class="container arrow-box" >
			<h1 class="site-title large-screen"><?php echo ( CFS()->get('header_title')); ?></h1>
		</div>
	</header>

	<div id="content" class="site-content">
