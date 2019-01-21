<?php
/**
 * Template part for displaying page content in general.php
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
			<div class="container mt-5">
				<div class="row">
					<div class="col-md-8 text-left">
						<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p>
										
					</div>

					<div class="col-md-4">
						<div class="p-4 mb-4" style="background-color: #ffffff; width:100%;">
							<h3 class="underline-gold">Enquiry form</h3>

							<?php
								echo do_shortcode('[gravityform id=2 name=Enquiry title=false description=false]');
							?>
						</div>



					</div>
				</div>
			</div>
	</div>

			<?php
			get_template_part( 'template-parts/testimonialblock' );
			?>


			<?php
			get_template_part( 'template-parts/newsblock' );
			?>



			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>

</article><!-- #post-## -->



