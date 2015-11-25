<?php
/**
* The Front Page (aka the static homepage for the site).
 **Template Name: front page
 * @package mlenizky_custom
 */

get_header(); ?>

	<div class="container tagline">
		<p><?php echo esc_html( CFS()->get('tagline')); ?></p>
	</div>


<div class="skills">
<li><i class="fa fa-envelope"></i></li>
<li><i class="fa fa-envelope"></i></li>
<li><i class="fa fa-envelope"></i></li>
</div>


<div></div>
<div class="mission"></div>
<!-- <img src="<?php echo get_template_directory_uri() ?>/images/team.jpg"> -->
<img src="http://cdn.sheknows.com/articles/2013/04/Puppy_2.jpg" id="headshot" alt="Michael Lenizky headshot">
<p><?php echo esc_html( CFS()->get('tagline')); ?></p>


<div class="arrow_box about-me"></div>
</div>
<?php

get_footer(); ?>

