<?php
/**
 * Template part for displaying page content in cancer treatment.php
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
						<h3 class="gold">Find out more</h3>
										
						<p><a href="/contact/" class="btn navGoldWhiteBtn">What is Skin Cancer</a><br />
						<a href="/contact/" class="btn navBlueWhiteBtn">Diagnosing Skin Cancer</a></p>

					</div>
					<div class="col-md-4">
						<div class="p-4 mb-4" style="background-color: #ffffff; width:100%;">
							<h3 class="underline-gold gold">Patient Downloads</h3>
							<div class="downloadPanel text-left">
								<p class="pdfDownload">Patient consent form</p>
								<p class="pdfDownload">Patient application form</p>
							</div>
						</div>
						<div class="text-center animation-element fade-up">
							<a href="/contact/" class="btn sideBlueGoldBtn">Book an appointment</a></p>
						</div>
						<div class="p-4 mb-4" style="background-color: #ffffff; width:100%;">
							<h3 class="underline-gold">Enquire about<br />
								<span class="gold"><?php the_title(); ?></span></h3>

							<?php
								echo do_shortcode('[gravityform id=2 name=Enquiry title=false description=false]');
							?>
						</div>



					</div>
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



