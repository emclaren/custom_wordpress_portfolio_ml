<?php
/**
 * The template for displaying all pages.
 * Template Name: contact page
 * @package mlezinsky_custom_theme
 */

get_header(); ?>

<div class="contact-heading">
	<h2><?php echo ( CFS()->get('heading_line1')); ?>
	<span><?php echo ( CFS()->get('heading_line2')); ?></span></h2>
</div>


<div class="contact-form">
	<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'template-parts/content', 'page' ); ?>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>
