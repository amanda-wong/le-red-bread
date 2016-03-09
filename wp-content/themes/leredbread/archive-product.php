<?php
/**
 * Template Name: Product Archive Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>Our products are made fresh daily</h1>
				<p>We are a team of creative and talented individuals who love making delicious treats.</p>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<!-- Create a product square --->
			<div class="product-square-container">
				<div class="product-square">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'medium' ); ?>
					<?php endif; ?>
					<p class="product-type"><?php the_title() ?></p>
				</div>
			</div>	
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
