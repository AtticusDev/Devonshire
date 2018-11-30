<?php
/**
 * Template Name: News Single
 * Template Post Type: post
 *
 * This is the template that displays all posts.

 */

get_header(); ?>


					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'news-single' );


					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
<?php
get_footer();
