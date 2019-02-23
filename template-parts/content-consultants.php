<?php
/**
 * Template part for displaying page content in consultants.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Devonshire
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-fluid" style="background-color: #f8f7f2;">
			<?php
			get_template_part( 'template-parts/topnav' );
			?>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 text-center">
						<h2 class="underline-gold gray mt-5 mb-2">Our <br />Specialists</h2>
					</div>
				</div>
				<div class="row justify-content-center">

					<?php
					$args = array(
					 'post_type' => 'consultant',
					 'meta_key' => 'order_number',
					 'orderby' => 'meta_value_num',
					 'order' => 'ASC', 
					 );

					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
					<div class="col-md-4 p-4 animation-element fade-up">
					<a href="<?php the_permalink(); ?>">
						<div class="p-4 d-flex align-items-end docImage" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-repeat: no-repeat; background-size: 150%; background-position: center center; width: 100%; height: 350px;">
							<div class="docBlockGray">
									<div class="docName"><?php the_title(); ?></div>
									<div class="docTitle"><?php the_field('title'); ?></div>
							</div>
						</div></a>
					</div>



					<?php
					endwhile;
					wp_reset_query();
					?>

				</div>
			</div>
	</div>



			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>

</article><!-- #post-## -->


<!-- JSON-LD markup generated for Local Business -->

	<?php
		the_field('schema');
	?>
