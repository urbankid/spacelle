<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Spacelle
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('w-full flex'); ?>>
	<div class="w-1/12">
		<div class="entry-meta text-xs">
			<?php sp__entry_meta(); ?>
		</div><!-- .entry-meta -->
	</div>
	<div class="w-11/12">

		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<?php sp__post_thumbnail(); ?>

		<div class="entry-content sp_-prose">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers. */
						__( 'Continue reading<span class="sr-only"> "%s"</span>', 'spacelle' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);

			wp_link_pages(
				array(
					'before' => '<div>' . __( 'Pages:', 'spacelle' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php sp__entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>

</article><!-- #post-${ID} -->
