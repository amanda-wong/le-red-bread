<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="hero">
                <h1>Baked to perfection.</h1>
            </section>
            <section class="product-info">
                <div class="product-info-container">
                    <div>
                        <div class="product-img-wrapper">
                            <img src="assets/images/bread.png" alt="bread">
                        </div>
                        <h3>Bread</h3>
                        <p>Bread is the ultimate comfort food! Our lust-worthy loaves will satisfy your most intense carb cravings. <a href="#">See More...</a></p>
                    </div>
                    <div>
                        <div class="product-img-wrapper">
                            <img src="assets/images/coffee.png" alt="coffee">
                        </div>
                        <h3>Coffee</h3>
                        <p>Start your day with decadent cup o' joe, or pop in for a mid-afternoon pick me up. Caffeine FTW. <a href="#">See More...</a></p>
                    </div>
                    <div>
                        <div class="product-img-wrapper">
                            <img src="assets/images/pretzels.png" alt="pretzel">
                        </div>
                        <h3>Pretzel</h3>
                        <p>Our soft-pretzels are available in a variety of flavours. When they taste this good, one is never enough! <a href="#">See More...</a></p>
                    </div>
                    <div>
                        <div class="product-img-wrapper">
                            <img src="assets/images/sweets.png" alt="sweets">
                        </div>
                        <h3>Sweets</h3>
                        <p>Our sinfully delicious sweets are simply irresistible! These gourmet treats will keep you coming back. <a href="#">See More...</a></p>
                    </div>
                </div>
            </section>
            <div>
                <p>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</p>
                <button>See Our Products</button>
            </div>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
