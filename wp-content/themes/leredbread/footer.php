<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="site-info-inner">
						<div class="contact">
							<h3>Contact</h3>
							<div>
								<i class="fa fa-envelope"></i><a href="mailto:info@leredbread.com"><p>info@leredbread.com</p></a>
							</div>
							<div>
								<i class="fa fa-phone"></i><a href="tel:555343554"><p>(555) 343 7891</p></a>
							</div>
							<div>
								<i class="fa fa-facebook-square"></i><i class="fa fa-twitter-square"></i><i class="fa fa-google-plus-square"></i>
							</div>
						</div>
						<div class="logo-footer-wrapper">
							<img class="logo" src="<?php bloginfo('template_directory'); ?>/assets/images/lrb-logo-white.svg" alt="Le Red Bread Logo">
						</div>
						<div class="business-hours">
							<h3>Business Hours</h3>
							<p><strong>Monday-Friday:</strong> 9am to 5pm</p>
							<p><strong>Saturday:</strong> 10am to 2pm</p>
							<p><strong>Sunday:</strong> Closed</p>
						</div>
					</div>
				</div><!-- .site-info -->
				<p class="copyright">Copyright &copy; <?php echo date('Y'); ?> Le Red Bread</p>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
