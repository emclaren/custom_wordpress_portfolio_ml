<?php
/**
 * The template for displaying archive pages.
 * Template Name: Portfolio Archive
 * @package RED_Starter_Theme
 */

get_header(); ?>


this is my archive portfolio page!!!!!!!!!

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->




<?php 
$query = new WP_Query( array( 'post_type' => 'portfolio' ) ); ?>


<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>

<div class= "skills-container">

<?php echo ( CFS()->get('icon_code')); ?>
<h4><?php echo ( CFS()->get('skill_title')); ?></h4>
<p><?php echo ( CFS()->get('skill_description')); ?></p>
</div>

<?php endwhile; endif; wp_reset_postdata(); ?>
</section>


<?php get_footer(); ?>
