<?php
/**
 * Template Name: Technology
 * Template Post Type: technology
 *
 * This is the template that displays all posts.

 */

get_header(); ?>


					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'technology' );


					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
<?php
get_footer();
