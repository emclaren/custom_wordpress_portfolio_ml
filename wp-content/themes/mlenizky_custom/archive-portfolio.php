<?php
/**
 * The template for displaying archive pages.
 * Template Name: Portfolio Archive
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div class="container tagline">
		<p><?php echo esc_html( CFS()->get('headline')); ?></p>
	</div>


<section class="skills ">
<?php 
$query = new WP_Query( array( 'post_type' => 'project' ) ); ?>


<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>



	<div class= "skills-container col">
		<h1><?php echo get_the_title(get_the_ID()); ?></h1>
		 <?php echo get_the_post_thumbnail(get_the_ID()); ?> 
		<p><?php echo ( CFS()->get('project_description')); ?></p> 
		<h4>Read the Case Study </h4>
	</div>

<?php endwhile; endif; wp_reset_postdata(); ?>

</section>


<?php  ?>







<?php get_footer(); ?>
