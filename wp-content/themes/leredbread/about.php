<?php
/**
 * Template Name: About Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div>
				<h1>Learn about our team and culture</h1>
				<?php echo CFS()->get( 'tagline'); ?>
			</div>
			<div>
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/team.jpg" class="team-photo" alt="team">
				<h2>Le Red Bread Team</h2>
				<p>Baking up a storm every day.</p>
				<?php echo CFS()->get( 'team_copy'); ?>
			</div>
			<div>
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/bakery.jpg" class="bakery-photo" alt="bakery">
				<h2>Le Red Bread Bakery</h2>
				<p>A home away from home.</p>
				<?php echo CFS()->get( 'bakery_copy'); ?>
			</div>
			<div>
				<h2>Our Story</h2>
				<?php echo CFS()->get( 'our_story_copy'); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
