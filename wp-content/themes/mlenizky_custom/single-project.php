<?php
/**
 * The template for displaying archive pages.
 * Template Name: Single Project
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="single-project-container">
	
	<?php while ( have_posts() ) : the_post(); ?>
	​
	<h1 class="single-project-header"><?php echo $content = get_the_title(); ?></h1>

	<?php echo get_the_content( ) ?>



<?php endwhile; // End of the loop. ?>
​

​

</div>





<?php get_footer(); ?>
