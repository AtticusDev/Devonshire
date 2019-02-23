<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Devonshire
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 pt-2">
						<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
						<div class="entry-summary">
						<?php the_excerpt(); ?>
						</div><!-- .entry-summary -->
					</div>
				</div>
			</div>



	<footer class="entry-footer">
		<?php devonshire_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

<!-- JSON-LD markup generated for Local Business -->

