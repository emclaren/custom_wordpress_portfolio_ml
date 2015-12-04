<?php
/**
 * The template for displaying archive pages.
 * Template Name: Portfolio Archive
 * @package RED_Starter_Theme
 */

get_header(); ?>


<div class="container intro-quote arrow-box white-arrow ">
	<p><?php echo esc_html( CFS()->get('portfolio_quote')); ?></p>
</div>


<section class="portfolio-list arrow-box gray-arrow ">
	<?php $query = new WP_Query( array( 'post_type' => 'project' ) ); ?>
	<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
	<div class= "portfolio-container large-screen  arrow-line">
		<h1 class="project-title"><?php echo get_the_title(get_the_ID()); ?></h1>
		<div class="project-info">
			<a href="<?php echo get_permalink(get_the_ID()); ?>">
			<?php echo get_the_post_thumbnail(get_the_ID()); ?> 
			</a>
			<div class="project-text">
				<p><?php echo ( CFS()->get('project_description')); ?></p> 
				<a href="<?php echo get_permalink(get_the_ID()); ?>" class="portfolio-link"> 
					<h4>Read the Case Study </h4>
				</a>
			</div>
		</div>
	</div>

<?php endwhile; endif; wp_reset_postdata(); ?>

</section>


<?php  ?>







<?php get_footer(); ?>
