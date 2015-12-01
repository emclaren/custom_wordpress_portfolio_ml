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
	<header >
		
			<nav id="site-navigation" class="navigation arrow_box2" role="navigation">
				<h3>Michael J.P. Lenizky</h3>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>
		<div class="container arrow_box" >
		
		<h1><?php echo ( CFS()->get('about_me')); ?></h1>
</div>
</header><!-- #masthead -->

<div id="content" class="site-content">
