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
	<div class="container-fluid home-banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
			<?php
			get_template_part( 'template-parts/topnav' );
			?>
			<div class="container">
				<div class="row">
					<div class="col-md-12 intro-strap">
						The beautiful science of skin care
					</div>
					<div class="col-md-4 homeIntro">
						The Devonshire Clinic is a private skin clinic based in Harley Street, London. Our team of dermatologists provide specialised skin treatments including both medical and cosmetic dermatology
					</div>
				</div>
				<div class="row justify-content-end">
					<div class="col-md-4 homeCTA">
						Talk to us about
						your condition or
						needs 020 7034 8057
					</div>

				</div>
			</div>
			<div class="container" style="height: 600px;">
				<div class="row">
					<div class="col-md-4">
						<div class="animation-element fade-up">
							<div class="serviceBlock d-flex align-items-end" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/legs.jpg');">
								<div class="container">
									<div class="newsSnippet">
										<h4 class="gold underline-gold">Skin Cancer</h4>
										<p class="pt-4 mb-1">Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Vivamus faucibus velit ac
										lorem sollicitudin rutrum. Suspendisse</p>
										<a href="/contact/" class="btn smallGoldWhiteBtn">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="animation-element fade-up">
							<div class="serviceBlock d-flex align-items-end" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/legs.jpg');">
								<div class="container">
									<div class="newsSnippet">
										<h4 class="blue underline-blue">Skin Cancer</h4>
										<p class="pt-4 mb-1">Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Vivamus faucibus velit ac
										lorem sollicitudin rutrum. Suspendisse</p>
										<a href="/contact/" class="btn smallBlueWhiteBtn">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="animation-element fade-up">
							<div class="serviceBlock d-flex align-items-end" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/legs.jpg');">
								<div class="container">
									<div class="newsSnippet">
										<h4 class="gold underline-gold">Skin Cancer</h4>
										<p class="pt-4 mb-1">Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Vivamus faucibus velit ac
										lorem sollicitudin rutrum. Suspendisse</p>
										<a href="/contact/" class="btn smallBlueWhiteBtn">Read More</a>
									</div>
								</div>
							</div>
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
			<div class="container-fluid" style="background-color:#f8f7f2;">
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

			<div class="container-fluid" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/multistar_gs.jpg'); background-position: center top; background-repeat: no-repeat;">
				<div class="row">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-8 text-center animation-element fade-up">
								<h2 class="underline-gold gray mt-5 mb-2">Devonshire Clinic<br />Technologies</h2>
								<p class="pt-4 pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
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
			get_template_part( 'template-parts/news' );
			?>


			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>

		</div>
</article><!-- #post-## -->



