<?php
/**
 * Template part for displaying page content in profile.php
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
				<div class="row justify-content-center">
					<div class="col-md-8 p-5">
						<h1 class="underline-gold">Dr Conal Perrett</h1>
						<p class="gold">Consultant Dermatologist</p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-12">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/doctor.jpg">
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6 mt-5 text-center animation-element fade-up">
						<a href="/contact/" class="btn largeBlueGoldBtn">Book an appointment</a>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6 mt-5 text-center animation-element fade-up">
						<p class="gold">Dr Perrett is a highly regarded dermatologist and founder of The Devonshire Clinic, which aims to bring the highest level of diagnostic and therapeutic expertise to private patients. He is an expert in all skin conditions but has a special interest in skin cancer, utilising the most advanced techniques including Mohs micrographic surgery and photodynamic therapy (PDT).</p>
						<p>One of London’s leading dermatologists<br />
As a Consultant Dermatologist & Dermatological Surgeon at University College London Hospital (UCLH), Dr Perrett plays a lead role in skin cancer and dermatology services within the NHS and has many years experience at the top of his field. Within the UCLH NHS Foundation Trust he has led the skin cancer service and established both the Mohs micrographic surgery programme and the highly regarded
photodynamic therapy (PDT) service. He is also the lead for Mohs surgery on the London Cancer Skin Pathway Board and is an honorary senior lecturer at Imperial College and University College London
(UCL), two of the UK’s most renowned academic institutions.</p>
					</div>
				</div>
			</div>
	</div>


			<div class="container-fluid" style="background-color:#f8f7f2;">
				<div class="row">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-12">
								<h2 class="underline-gold gray mt-5">Videos</h2>
							</div>
							<div class="col-md-6 text-center animation-element fade-up">
								<div class="mb-5 p-4" style="background-color: #ffffff;">
									<iframe src="https://player.vimeo.com/video/110782325?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								</div>
							</div>
							<div class="col-md-6 text-center animation-element fade-up">
								<div class="mb-5 p-4" style="background-color: #ffffff;">
									<iframe src="https://player.vimeo.com/video/110782325?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								</div>
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



