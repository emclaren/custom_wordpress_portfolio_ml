<?php
/**
* The Front Page (aka the static homepage for the site).
 *Template Name: front page
 * @package mlenizky_custom
 */

get_header(); ?>

<div id="DivB">
	<div class="container intro-quote arrow-box white-arrow ">
		<p><?php echo esc_html( CFS()->get('intro_quote')); ?></p>
	</div>

	<section class="skills  ">
		<div class="grid-3_sm-2_xs-1 large-screen">
			<?php $query = new WP_Query( array( 'post_type' => 'skill' ) ); ?>
			<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
			<div class= "skills-container col">
				<img class="skills-image" src="<?php echo ( CFS()->get('skill_icon')); ?>">
				<h4><?php echo get_the_title(get_the_ID()); ?></h4>
				<p><?php echo ( CFS()->get('skill_description')); ?></p> 
			</div>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
</section>
<div class=" skills_flag"></div>
<section class="container about">

	<div id="headshot">
		<?php echo get_the_post_thumbnail(get_the_ID()); ?>
	</div> 
	<p><?php echo esc_html( CFS()->get('about_me')); ?></p>
</section>
</div>

<?php

get_footer(); ?>

