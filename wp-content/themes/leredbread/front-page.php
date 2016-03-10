<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary-front" class="front-page-content">
		<main id="main-font" class="front-page-main" role="main">
            <section class="hero">
                <h1>Baked to perfection.</h1>
            </section>
            <section class="product-info-container">
                <div class="product-info">
					<?php
					   $terms = get_terms( 'product-type');
					 ?>
					<?php if (! empty($terms) ) : ?>
					<?php foreach ($terms as $term) : ?>
					<div>
						<div class="product-img-wrapper">
						   <img src="<?php echo get_template_directory_uri()."/assets/images/\/".$term->slug; ?>.png" alt="product types" />
					   	</div>
							<h3>
								<?php echo $term->name; ?>
							</h3>
							<p>
								<?php echo $term->description; ?>
								<a href='<?php echo get_term_link( $term ); ?>'>See More...</a>
							</p>
					</div>
					 <?php endforeach; ?>
					 <?php endif; ?>
                </div>
                <div class="front-page-cta">
                    <div>
                        <p>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</p>
                        <a href="#"><button>See Our Products</button></a>
                    </div>
                </div>
            </section>
            <section class="latest-news">
                <h2>Our latest news</h2>




            </section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
