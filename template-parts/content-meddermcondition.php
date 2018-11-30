<?php
/**
 * Template part for displaying page content in medicaldermatologycondition.php
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
								<span class="gold">Specialist Acne Treatment</span></h3>

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


	<div class="container-fluid mt-0 mb-4 pt-5 pb-5"  style="background-color: #f8f7f2;">
		<div class="row justify-content-center">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center animation-element fade-up">
						<h2 class="underline-gold gray">Available Acne Treatments</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 p-3">
						<div>
							<div class="p-4 text-center" style="background-color: #ffffff;">
								<h3 class="underline-blue">Salicylic acid peel</h3>

								<p>Aquos iliqui dus, nus erspe cum sunt, sundipidis sundit
								vitem id ut imet quaectustio to volorepero doluptas
								expelibus, tentur, occulpa susciis ipsundit, sitibu</p>
								<a href="/medical-dermatology/acne/" class="btn smallBlueWhiteBtn">Read More</a>

							</div>
						</div>
					</div>
					<div class="col-md-4 p-3">
						<div>
							<div class="p-4 text-center" style="background-color: #ffffff;">
								<h3 class="underline-blue">Microdermabrasion</h3>

								<p>Aquos iliqui dus, nus erspe cum sunt, sundipidis sundit
								vitem id ut imet quaectustio to volorepero doluptas
								expelibus, tentur, occulpa susciis ipsundit, sitibu</p>
								<a href="/contact/" class="btn smallBlueWhiteBtn">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 p-3">
						<div>
							<div class="p-4 text-center" style="background-color: #ffffff;">
								<h3 class="underline-blue">Medication</h3>

								<p>Aquos iliqui dus, nus erspe cum sunt, sundipidis sundit
								vitem id ut imet quaectustio to volorepero doluptas
								expelibus, tentur, occulpa susciis ipsundit, sitibu</p>
								<a href="/contact/" class="btn smallBlueWhiteBtn">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 p-5 animation-element fade-up text-left">
						<h2 class="underline-gold">Why use the Devonshire Clinic?</h2>
						<p class="gold">We know how profoundly acne can impact on the lives of those dealing with it. Where
regular skin clinics can only offer limited assistance, we have the experience and
specialist knowledge to introduce positive changes to your skin.</p>
						<p>Our dermatologists are experts in treating acne and provide the most advanced and comprehensive private acne
treatment in London. Our teams experience covers a wide range of specialities and innovative solutions. Whatever your
individual needs we can choose the specialist that is right for you.
• Dr Rubeta Matin, is a Consultant Dermatologist, PhD BSc (HONS) MBBS MRCP [DERM] – one of her areas of speciality
is General Dermatology, which includes the treatment of Acne.
• Dr Rachel Sidwell, is a Consultant Dermatologist, MBChB, MRCP (paeds), MRCP – she has a speciality in Paediatric
Dermatology and can help younger Acne suffers.
• Mrs Tanya Wright is a BSc Honours MSc Allergy HCPC Registered Dietitian – if the type of food you are eating is
contributing to your skin condition, she can identify the cause and build a dietary plan to help you.
Your acne is treatable. Working together, we can create a successful solution just for you. All you have to do is contact
us today to arrange a consultation and start your journey towards clearer skin.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


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



