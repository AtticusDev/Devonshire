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
						<?php
							the_content();
						?>
					</div>
					<div class="col-md-4 homeIntro">
						<?php
							the_field('intro_text');
						?>
					</div>
				</div>
				<div class="row justify-content-end">
					<div class="col-md-4 homeCTA">
						<?php
							the_field('contact_info');
						?>
					</div>

				</div>
			</div>
			<div class="container" style="height: 600px;">
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="animation-element fade-up">
							<div class="serviceBlock d-flex align-items-end" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/legs.jpg');">
								<div class="container">
									<div class="newsSnippet">
										<h4 class="gold underline-gold">Skin Cancer</h4>
										<p class="mb-1">Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Vivamus faucibus velit ac
										lorem sollicitudin rutrum. Suspendisse</p>
										<a href="/contact/" class="btn smallGoldWhiteBtn">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="animation-element fade-up">
							<div class="serviceBlock d-flex align-items-end" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/legs.jpg');">
								<div class="container">
									<div class="newsSnippet">
										<h4 class="blue underline-blue">Skin Cancer</h4>
										<p class="mb-1">Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Vivamus faucibus velit ac
										lorem sollicitudin rutrum. Suspendisse</p>
										<a href="/contact/" class="btn smallBlueWhiteBtn">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="animation-element fade-up">
							<div class="serviceBlock d-flex align-items-end" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/legs.jpg');">
								<div class="container">
									<div class="newsSnippet">
										<h4 class="gold underline-gold">Skin Cancer</h4>
										<p class="mb-1">Lorem ipsum dolor sit amet, consectetur
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




			<?php
			get_template_part( 'template-parts/videoblock' );
			?>


			<div class="container-fluid" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/multistar_gs.jpg'); background-position: center top; background-repeat: no-repeat;">
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
			get_template_part( 'template-parts/newsblock' );
			?>


			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>

		</div>
</article><!-- #post-## -->



