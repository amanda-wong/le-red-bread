<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <a href="<?php echo get_comments_link( $post->ID ); ?>"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></a> / <?php red_starter_posted_by(); ?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<hr />
</article><!-- #post-## -->
