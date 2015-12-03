<?php
/**
 * The header for our theme.
 * 
 * @package RED_Starter_Theme
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
		<div class="test">
		<div class="fixed-nav-bar" id="DivA">
			<nav id="site-navigation" class="navigation arrow-box floating-arrow" role="navigation">
				<a href="about" class="home-link "> 
					<h3>Michael J.P. Lenizky</h3>
				</a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>	
			</nav>
		</div>
	</div>
		<div class="container arrow-box" >
			<h1 class="site-title large-screen"><?php echo ( CFS()->get('header_title')); ?></h1>
		</div>
	</header>

<div id="content" class="site-content">
