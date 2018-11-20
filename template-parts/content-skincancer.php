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
					<div class="col-md-6">
						<h1>Skin Cancer</h1>
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

	<div class="container mt-5 mb-5">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center animation-element fade-up">
				<h2 class="underline-gold gray">Skin Cancer Treatments</h2>
				<p class="pt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
faucibus velit ac lorem sollicitudin rutrum. Suspendisse bibendum.
Donsectetur. Consectetur adipiscing elit. Vivamus faucibus velit ac</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 p-3">
				<div class="cancerTreatment">
					<div class="p-4 text-center" style="background-color: #ffffff;">
						<h3 class="underline">MOHs Micrographic Surgery</h3>

						<p>Aquos iliqui dus, nus erspe cum sunt, sundipidis sundit
						vitem id ut imet quaectustio to volorepero doluptas
						expelibus, tentur, occulpa susciis ipsundit, sitibu</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 p-3">
				<div class="cancerTreatment">
					<div class="p-4 text-center" style="background-color: #ffffff;">
						<h3 class="underline">MOHs Micrographic Surgery</h3>

						<p>Aquos iliqui dus, nus erspe cum sunt, sundipidis sundit
						vitem id ut imet quaectustio to volorepero doluptas
						expelibus, tentur, occulpa susciis ipsundit, sitibu</p>
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
	<div class="container-fluid mt-5" style="background-color:#f8f7f2;">
		<div class="row">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 text-center animation-element fade-up">
						<h2 class="underline-gold gray mt-5 mb-2">An introduction<br />to the clinic</h2>
						<p class="pt-4 pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
						faucibus velit ac lorem sollicitudin rutrum. Suspendisse bibendum.</p>					
					</div>
					<div class="col-md-6 mb-5" style="height: 200px; background-color: #ffffff;">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 text-center animation-element fade-up">
						<h2 class="underline-gold gray mt-5 mb-2">Our Skin Cancer<br />Specialists</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 p-5 animation-element fade-up">
						<div class="p-4 d-flex align-items-end" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/doctor.jpg'); background-repeat: no-repeat; width: 100%; height: 350px;">
							<div class="d-flex align-items-center justify-content-center docBlockGray">
								Dr Conal Perrett
							</div>
						</div>
					</div>
					<div class="col-md-4 p-5 animation-element fade-up">
						<div class="p-4 d-flex align-items-end" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/doctor.jpg'); background-repeat: no-repeat; width: 100%; height: 350px;">
							<div class="d-flex align-items-center justify-content-center docBlockGray">
								Dr Jane McGregor
							</div>
						</div>
					</div>
					<div class="col-md-4 p-5 animation-element fade-up">
						<div class="p-4 d-flex align-items-end" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/doctor.jpg'); background-repeat: no-repeat; width: 100%; height: 350px;">
							<div class="d-flex align-items-center justify-content-center docBlockGray">
								Dr Duncan Atherton
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>






			<?php
			get_template_part( 'template-parts/news' );
			?>


			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>

</article><!-- #post-## -->



