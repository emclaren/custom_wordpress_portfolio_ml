<?php
/**
 * The template for displaying archive pages.
 * Template Name: Single Project
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
​
		<?php while ( have_posts() ) : the_post(); ?>
​<div class="garbage" style= "background-image: url( <?php
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
echo $url ?>)">
	<h1><?php echo get_the_title(get_the_ID()); ?></h1>


<?php echo get_the_content( ) ?>
	</div>	 



		<?php endwhile; // End of the loop. ?>
​
		</main><!-- #main -->
	</div><!-- #primary -->
​







<?php get_footer(); ?>
