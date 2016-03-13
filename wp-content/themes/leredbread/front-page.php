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
                        <a href="/products"><button>See Our Products</button></a>
                    </div>
                </div>
            </section>
            <section class="latest-news">
                <h2>Our latest news</h2>
				<hr />
				<?php
					$args = array( 'post_type' => 'post', 'numberposts' => 4 );
					$latest_posts = get_posts( $args );
				?>
				<div class="latest-post-cube-container">
							<?php foreach( $latest_posts as $post ) : setup_postdata( $post ); ?>
							<?php if ( has_post_thumbnail() ) : ?>
					<div class="latest-post-cube">
						<div class="latest-post-img">
							<?php the_post_thumbnail('large'); ?>
						</div>
							<?php endif; ?>
						<div class="entry-meta-container">
							<p>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</p>
							<span class="entry_meta">
								<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
							</span>
						</div>
					</div>
							<?php endforeach; wp_reset_postdata(); ?>
				</div>
            </section>
			<section class="testimonials">
				<h2>What others say about us</h2>
				<hr />
				<div class="testimony-container">
					<div class="individual-testimonials">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/dr-dosist-headshot.png" alt="Dr. Dosist">
						<div>
							<p>
								Healthy food be damned! If you are a bakery and sweet addict like myself this place is life changing. So many goodies. Have a cheat day and eat all the pretzels!
							</p>
							<p>
								<span>Dr. Dosist</span><br />
								Nutritionist – <a href="http://www.redacademy.com/" target="_blank">Health Time Clinic</a>
							</p>
						</div>
					</div>
					<div class="individual-testimonials">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/maxi-milli-headshot.png" alt="Chef Maxi Milli">
						<div>
							<p>
								Do you like bread? Seriously, who doesn’t? You have to check Le Red Bread’s lovely loaves. Fresh flavours every day…need I say more?
							</p>
							<p>
								<span>Maxi Milli</span><br />
								Chef – <a href="http://www.redacademy.com/" target="_blank">Sailor Spoon</a>
							</p>
						</div>
					</div>
					<div class="individual-testimonials">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/ana-vandana-headshot.png" alt="Author Anna Vandana">
						<div>
							<p>
								Excellent cookies! They always have unique flavours and the cookies are always super fresh. Make sure you get them before they sell out! And keep an eye out on holidays, the flavour combinations they come up with are brilliant. Delicious!
							</p>
							<p>
								<span>Anna Vandana</span><br />
								Author – <a href="http://www.redacademy.com/" target="_blank">Food Is Great Magazine</a>
							</p>
						</div>
					</div>
					<div class="individual-testimonials">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/martha-m-masters-headshot.png" alt="Food Critic Martha M. Masters">
						<div>
							<p>
								Where has this bakery been all my life! I absolutely love their cookies and muffins. Nom nom.
							</p>
							<p>
								<span>Martha M. Masters</span><br />
								Food Critic – <a href="http://www.redacademy.com/" target="_blank">WikiTravel</a>
							</p>
						</div>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
