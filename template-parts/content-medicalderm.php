<?php
/**
 * Template part for displaying page content in home.php
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
					<div class="col-md-6 p-5">
						<h1>Medical Dermatology</h1>
						<p>Skin cancer can arise anywhere on the skin but it
						is more common on the parts that are exposed
						to sunlight; the face, hands, neck, and arms. Even
						though it is one of the most common cancers skin
						cancer kills a relatively small number of people
						because, when detected early, it is usually treatable</p>
						<h3 class="gold">Find out more</h3>
										
						<p><a href="/contact/" class="btn navGoldWhiteBtn">What is Skin Cancer</a><br />
						<a href="/contact/" class="btn navBlueWhiteBtn">Diagnosing Skin Cancer</a></p>

					</div>
					<div class="col-md-6">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/tech-pic.jpg" class="mt-5">
					</div>
				</div>
				<div class="row">
					<div class="col text-center animation-element fade-up">
						<a href="/contact/" class="btn largeBlueGoldBtn">Book an appointment</a>
					</div>
				</div>
			</div>
	</div>

	<div class="container-fluid mt-0 mb-4 pt-5 pb-5" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/medical-derm-bg.jpg'); background-position: center center;">
		<div class="row justify-content-center">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center animation-element fade-up">
						<h2 class="underline-gold gray">Medical Dermatology Treatments</h2>
						<p class="pt-5 gold">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
		faucibus velit ac lorem sollicitudin rutrum. Suspendisse bibendum.
		Donsectetur. Consectetur adipiscing elit. Vivamus faucibus velit ac</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 p-3">
						<div>
							<div class="p-4 text-center" style="background-color: #ffffff;">
								<h3 class="underline-blue">MOHs Micrographic Surgery</h3>

								<p>Aquos iliqui dus, nus erspe cum sunt, sundipidis sundit
								vitem id ut imet quaectustio to volorepero doluptas
								expelibus, tentur, occulpa susciis ipsundit, sitibu</p>
								<a href="/contact/" class="btn smallBlueWhiteBtn">Read More</a>

							</div>
						</div>
					</div>
					<div class="col-md-6 p-3">
						<div>
							<div class="p-4 text-center" style="background-color: #ffffff;">
								<h3 class="underline-blue">MOHs Micrographic Surgery</h3>

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

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="cancerTreatment">
					<h3 class="underline-gold">Enquire about Skin Cancer</h3>
				<?php
					echo do_shortcode('[gravityform id=1 name=Enquiry title=false description=false]');
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
			get_template_part( 'template-parts/secondopinion' );
			?>



			<?php
			get_template_part( 'template-parts/news' );
			?>


			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>

</article><!-- #post-## -->



