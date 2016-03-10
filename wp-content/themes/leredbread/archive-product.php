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
			<hr />
			<section class="product-categories">
				<?php $terms = get_terms( 'product-type'); ?>
				<?php if (! empty($terms) ) : ?>
				<?php foreach ($terms as $term) : ?>
				<div>
					<div class="product-img-wrapper small">
					   <img src="<?php echo get_template_directory_uri()."/assets/images/\/" . $term->slug; ?>.png" alt="Product Types" />
					</div>
					<h3>
						<a href='<?php echo get_term_link( $term ); ?>'><?php echo $term->name; ?></a>
					</h3>
				</div>
				 <?php endforeach; ?>
				 <?php endif; ?>
			</section>
			<?php /* Start the Loop */ ?>
			<div class="product-container">

			<?php while ( have_posts() ) : the_post(); ?>

				<!-- Create a product square --->
				<div class="product-square-wrap">
					<div class="product-square">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'medium' ); ?>
						<?php endif; ?>
					</div>
					<div class="product-type-price">
						<span><?php the_title() ?></span>
						<span><?php echo CFS()->get( 'price' ); ?></span>
					</div>
			</div>
			<?php endwhile; ?>
			</div> <!-- end product-container -->

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
