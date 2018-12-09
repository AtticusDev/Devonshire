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
					<div class="col-md-8 p-5">
					<?php
					the_content();
					?>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-12">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/about-banner.jpg">
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6 mt-5 text-center animation-element fade-up">
						<h3 class="gold">If you want to make an appointment with The Devonshire Clinic to
see Dr Conal Perrett or one of our other Consultant Dermatologists,
please click the button below or call us on 020 7034 8057.</h3>
						<a href="/contact/" class="btn largeBtn gold bgblue">Book an appointment</a>
					</div>
				</div>
			</div>
	</div>

			<?php
			get_template_part( 'template-parts/specialistsblock' );
			?>


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
			get_template_part( 'template-parts/facilitiesblock' );
			?>



			<?php
			get_template_part( 'template-parts/newsblock' );
			?>


			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>

</article><!-- #post-## -->



