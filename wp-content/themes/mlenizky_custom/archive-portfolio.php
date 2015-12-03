<?php
/**
 * The template for displaying archive pages.
 * Template Name: Portfolio Archive
 * @package RED_Starter_Theme
 */

get_header(); ?>

[edsanimate animation="bounceOutRight" delay="2" duration="1" infinite_animation="no" animate_on="click" ]
<div class= "container-large">
	<div class="container portfolio-tagline tagline">
		<p><?php echo esc_html( CFS()->get('portfolio_quote')); ?></p>
	</div>


<section class="portfolio">

<?php 
$query = new WP_Query( array( 'post_type' => 'project' ) ); ?>



<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>



	<h1><?php echo get_the_title(get_the_ID()); ?></h1>

<?php echo get_the_content( ) ?>
	<div class= "portfolio-container arrow_box3">
		<h1 class="portfolio-title"><?php echo get_the_title(get_the_ID()); ?></h1>
		 <div class="portfolio-project">
		 <?php echo get_the_post_thumbnail(get_the_ID()); ?> 
		<div class="side-text">
			<p><?php echo ( CFS()->get('project_description')); ?></p> 
		
		<a href="<?php echo get_permalink(get_the_ID()); ?>"> <h4>Read the Case Study </h4></a>
		</div>
	</div>
</div>

<?php endwhile; endif; wp_reset_postdata(); ?>

</section>

[/edsanimate]

		


<?php  ?>







<?php get_footer(); ?>
