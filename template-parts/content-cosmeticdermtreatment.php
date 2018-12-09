<?php
/**
 * Template part for displaying page content in cosmeticdermtreatment.php
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
										
						<p><a href="/contact/" class="btn navGoldWhiteBtn">What is Cosmetic Dermatology</a></p>
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
			get_template_part( 'template-parts/testimonialblock' );
			?>




			<div class="container-fluid" style="background-color:#f8f7f2;">
				<div class="row">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-8 text-center animation-element fade-up">
								<h2 class="underline-gold gray mt-5">Our facilities</h2>
								<p class="pb-5 gold">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
faucibus velit ac lorem sollicitudin rutrum. Suspendisse bibendum.
Donsectetur. Consectetur adipiscing elit. Vivamus faucibus velit.</p>					
							</div>
							<div class="mb-5 p-4" style="background-color: #ffffff;">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/ourfacilities.jpg">
							</div>
						</div>
					</div>
				</div>
			</div>


			<?php
			get_template_part( 'template-parts/specialistsblock' );
			?>


			<div class="container-fluid"  style="background-color:#f8f7f2;">
				<div class="row">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-8 text-center animation-element fade-up">
								<h2 class="underline-gold gray mt-5">Devonshire Clinic<br />Technologies</h2>
								<p class="pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
								faucibus velit ac lorem sollicitudin rutrum. Suspendisse bibendum.</p>					
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 p-3 animation-element fade-up">
								<div class="p-4 d-flex align-items-end" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/tech-pic.jpg'); width: 100%; height: 260px;">
									<div class="d-flex align-items-center justify-content-center techBlockGold">
										Aerolase Lightpod Neo
									</div>
								</div>
							</div>
							<div class="col-md-4 p-3 animation-element fade-up">
								<div class="p-4 d-flex align-items-end" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/tech-pic.jpg'); width: 100%; height: 260px;">
									<div class="techBlockWhite d-flex align-items-center justify-content-center">
										Aerolase Lightpod Neo
									</div>
								</div>
							</div>
							<div class="col-md-4 p-3 animation-element fade-up">
								<div class="p-4 d-flex align-items-end" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/tech-pic.jpg'); width: 100%; height: 260px;">
									<div class="d-flex align-items-center justify-content-center techBlockGold">
										Aerolase Lightpod Neo
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>







			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>

</article><!-- #post-## -->



