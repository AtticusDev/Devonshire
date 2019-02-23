<?php
/**
 * Template part for displaying page content in cosmeticderminfo.php
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

						<?php
						get_template_part( 'template-parts/buttonsblock' );
						?>


					</div>

					<div class="col-md-4">
						<div class="p-4 mb-4" style="background-color: #ffffff; width:100%;">
							<h3 class="underline-gold">Enquire about<br />
								<span class="gold">Cosmetic Dermatology</span></h3>

							<?php
								echo do_shortcode('[gravityform id=2 name=Enquiry title=false description=false]');
							?>
						</div>



					</div>
				</div>
			</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="container mt-5 mb-5 text-left">
				<div class="row">
					<div class="col-md-6 p-5 animation-element fade-up">
						<p><?php the_field('description1'); ?></p>
					</div>
					<div class="col-md-6 p-5 animation-element fade-up">
						<p><?php the_field('description2'); ?></p>
					</div>

				</div>
			</div>
		</div>
	</div>


			<div class="container">
				<div class="row">
					<div class="col text-center animation-element fade-up">
					<?php
					get_template_part( 'template-parts/pageaptbutton' );
					?>
					</div>
				</div>
			</div>


			<?php
			get_template_part( 'template-parts/specialistsblock' );
			?>


			<?php
			get_template_part( 'template-parts/secondopinion' );
			?>


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

<!-- JSON-LD markup generated for Local Business -->

	<?php
		the_field('schema');
	?>

