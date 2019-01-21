<?php
/**
 * Template Name: Staff Profile
 * Template Post Type: staff
 *
 * This is the template that displays all posts.

 */
get_header(); ?>


					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'staffprofile' );


					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
<?php
get_footer();
