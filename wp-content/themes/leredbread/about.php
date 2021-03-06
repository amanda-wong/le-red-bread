<?php
/**
 * Template Name: About Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class="about-page-header">
				<h2>Learn about our team and culture</h2>
				<p><?php echo CFS()->get( 'tagline' ); ?></p>
			</header>
			<hr />	
			<div class="about-info-container">
				<div class="about-two-columns">
					<div>
						<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/team.jpg" class="team-photo" alt="team">
						<h3>Le Red Bread Team</h3>
						<p>Baking up a storm every day.</p>
						<p><?php echo CFS()->get( 'team_copy' ); ?></p>
					</div>
					<div>
						<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bakery.jpg" class="bakery-photo" alt="bakery">
						<h3>Le Red Bread Bakery</h3>
						<p>A home away from home.</p>
						<p><?php echo CFS()->get( 'bakery_copy' ); ?></p>
					</div>
				</div>
				<div class="our-story-container">
					<h2>Our Story</h2>
					<p><?php echo CFS()->get( 'our_story_copy' ); ?></p>
				</div>
			</div>
			<div class="about-page-cta">
				<div>
					<p>Feel free to contact us with any questions coments or suggestions. We even take custom orders!</p>
					<a href="/contact"><button>Contact Us</button></a>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
