<?php
/**
 * Template part for displaying page content in about.php
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
					<div class="col-md-8 p-5 links-underline">
					<?php
					the_content();
					?>
					</div>
				</div>
				<div class="row justify-content-center animation-element fade-up">
					<div class="col-md-12">
						<img src="<?php the_post_thumbnail_url(); ?>">
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6 mt-5 text-center animation-element fade-up">
						<h3 class="gold">
							<?php
								the_field('make_appointment');
							?>
								
							</h3>
					<?php
					get_template_part( 'template-parts/pageaptbutton' );
					?>
					</div>
				</div>
			</div>
	</div>

			<?php
			get_template_part( 'template-parts/videoblock' );
			?>

			<?php
			get_template_part( 'template-parts/specialistsblock' );
			?>

			<?php
			get_template_part( 'template-parts/staffblock' );
			?>

			<?php
			get_template_part( 'template-parts/secondopinion' );
			?>

			<?php
			get_template_part( 'template-parts/testimonialblock' );
			?>





			<?php
			get_template_part( 'template-parts/facilitiesblock' );
			?>



			<?php
			get_template_part( 'template-parts/newsblock' );
			?>


			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>

</article><!-- #post-## -->

	<?php
		the_field('schema');
	?>


