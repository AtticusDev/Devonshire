<?php
/**
 * Template part for displaying page content in medicalderminfo.php
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
						<h1>Information on Medical Dermatology Conditions</h1>
						<div class="p-3 medDermInfoBlock">
							<div class="p-4" style="background-color: #ffffff;">
								<h3 class="gold">What is Acne?</h3>
								<p>Evelibus dolorup tassunti repuda simpe as auditaq uiaspe comnis ullit aut volum fuga. Xerore et que consendebis</p>
								<a href="/skin-cancer/skin-cancer-surgery" class="btn smallBlueWhiteBtn">Read More</a>
							</div>
						</div>
						<div class="p-3 medDermInfoBlock">
							<div class="p-4" style="background-color: #ffffff;">
								<h3 class="gold">What is Acne?</h3>
								<p>Evelibus dolorup tassunti repuda simpe as auditaq uiaspe comnis ullit aut volum fuga. Xerore et que consendebis</p>
								<a href="/skin-cancer/skin-cancer-surgery" class="btn smallBlueWhiteBtn">Read More</a>
							</div>
						</div>
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

			<div class="container">
				<div class="row">
					<div class="col text-center animation-element fade-up">
						<a href="/contact/" class="btn largeBlueGoldBtn">Book an appointment</a>
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
			get_template_part( 'template-parts/news' );
			?>



			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>

</article><!-- #post-## -->



