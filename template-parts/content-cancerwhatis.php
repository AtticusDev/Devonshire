<?php
/**
 * Template part for displaying page content in cancerwhatis.php
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
						<h1>Surgery for Skin Cancer</h1>
						<p>Surgery is usually the primary treatment for skin cancer. Skin surgery is used to take samples for biopsy and it can then be used as the initial treatment to remove the cancer cells from the skin. In some cases diagnosis and treatment occur simultaneously, with all the cancer cells removed as part of the biopsy process.

<h2>The skin surgery process</h2>
<p>The extent of skin surgery and the time that it takes depends on the area of skin being treated and the technique used. Removal of a cancerous mole using traditional surgery can take less than 30 minutes but Mohs microsurgery can take much longer.</p>
<p>Simple, straightforward surgery can usually be done as a day case at The Devonshire Clinic, with a local anaesthetic and a mild sedative if necessary. Larger procedures will require admission to hospital and an inpatient stay.</p>
<h2>Which skin surgery is right for me?</h2>
<p>The choice of surgical technique will depend on a number of factors relating to your condition:
<ul>
	<li>The size and location of the lesion</li>
<li>Whether the lesion is superficial or infiltrating</li>
<li>Whether the lesion is benign or malignant</li>
<li>Whether the surgery is part of your diagnosis or your treatment</li>
<li>The risk of scarring</li>
</ul>
<p>The dermatologists at The Devonshire Clinic will explain the type of surgery that you need and
exactly what is involved. We will give you our expert advice and recommendations, but the
final choice is always up to you. It is particularly important for cosmetic skin surgery that you
have thought through the potential problems and risks before you decide to go ahead.</p>
						<h3 class="gold">Find out more</h3>
										
						<p><a href="/contact/" class="btn navGoldWhiteBtn">What is Skin Cancer</a><br />
						<a href="/contact/" class="btn navBlueWhiteBtn">Diagnosing Skin Cancer</a></p>

					</div>
					<div class="col-md-4">
						<div class="p-4 mb-4" style="background-color: #ffffff; width:100%;">
							<h3 class="underline-gold">Enquire about<br />
								<span class="gold">Skin Cancer</span></h3>

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
			get_template_part( 'template-parts/news' );
			?>



			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>

</article><!-- #post-## -->



