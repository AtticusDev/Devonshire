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
	<div class="container-fluid"  style="background-color: #f8f7f2;">
			<?php
			get_template_part( 'template-parts/topnav' );
			?>
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-md-12 intro-strap">
						<?php
							the_content();
						?>
					</div>
				</div>
			</div>
	</div>

	<div class="container-fluid" style="background-color: #f8f7f2;">
		<div class="row">
			<div class="container">
				<div class="row">
				<?php if( have_rows('contact_blocks') ): 
					 while( have_rows('contact_blocks') ): the_row(); 
					// vars
					$title = get_sub_field('title');
					$description = get_sub_field('description');
					$link = get_sub_field('link');
					$image = get_sub_field('image');
				?>
				<div class="col-sm-12 col-md-12 col-lg-4">
					<div class="animation-element fade-up">
						<div class="contactBlock d-flex align-items-end" style="background-image: url('<?php echo $image['url']; ?>'); background-size: cover; background-position: center center;">
							<div class="container">
								<div class="newsSnippet">
									<h4 class="gold underline-gold"><?php echo $title; ?></h4>
									<p class="mb-1"><?php echo $description; ?></p>
									<a href="<?php echo $link; ?>" class="btn smallGoldWhiteBtn">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php endwhile;
				endif; ?>
				</div>
			</div>
		</div>
	</div>

			<div class="container-fluid" style="background-color:#f8f7f2;">
				<div class="row">
					<div class="container mt-5">
						<div class="row justify-content-center">
							<div class="col-md-8 mb-4 text-center animation-element fade-up">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/devonshire-logo-stacked-gold.svg" class="contactLogo">
							</div>
							<div class="col-md-8 mb-5 p-4" style="background-color: #ffffff;">
								<?php
								$image = get_field('map');
								if(!empty($image)): ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?> 
							</div>
							<div class="col-md-8 mb-5">
								<p><?php the_field('directions'); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>

	<div class="container mb-5 mt-5">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="cancerTreatment">
					<h3 class="underline-gold">General enquiry</h3>
				<?php
					echo do_shortcode('[gravityform id=1 name=Enquiry title=false description=false]');
				?>
				</div>
			</div>
		</div>
	</div>


			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>

		</div>
</article><!-- #post-## -->



