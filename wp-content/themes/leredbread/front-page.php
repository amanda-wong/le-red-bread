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
					 	$terms = get_terms('product-type');

						echo '<pre>';
						print_r($terms);
						echo '</pre>';
					?>


                </div>
                <div class="products-cta">
                    <div>
                        <p>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</p>
                        <button>See Our Products</button>
                    </div>
                </div>
            </section>
            <section class="latest-news">
                <h2>Our latest news</h2>


            </section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
