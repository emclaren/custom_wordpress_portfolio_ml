<?php
/**
* The Front Page (aka the static homepage for the site).
 *Template Name: front page
 * @package mlenizky_custom
 */

get_header(); ?>


<div id="pt-main" class="pt-perspective">
	<div class="pt-page pt-page-1">
		
	<div class="container tagline">
		<p><?php echo esc_html( CFS()->get('tagline')); ?></p>
	</div>

<div class="arrow_box about-me"></div>



<section class="skills ">

<div class="grid-3_xs-1">
<?php 
$query = new WP_Query( array( 'post_type' => 'skill' ) ); ?>


<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>



	<div class= "skills-container col">
		<img src="<?php echo ( CFS()->get('icon')); ?>">
		<h4><?php echo get_the_title(get_the_ID()); ?></h4>
		<p><?php echo ( CFS()->get('skill_description')); ?></p> 
	</div>

<?php endwhile; endif; wp_reset_postdata(); ?>
</section>


</div>


<div class="arrow_box skills_flag"></div>
<section class="about"></div>
<!-- <img src="<?php echo get_template_directory_uri() ?>/images/team.jpg"> -->
<img src="http://cdn.sheknows.com/articles/2013/04/Puppy_2.jpg" id="headshot" alt="Michael Lenizky headshot">

<p><?php echo esc_html( CFS()->get('tagline')); ?></p>

</section>
<div class="arrow_box about-me"></div>
</div>
<?php

get_footer(); ?>

