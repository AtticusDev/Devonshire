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
				<div class="row justify-content-between">
					<div class="col-md-12 intro-strap">
						<?php
							the_content();
						?>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-4 homeIntro">
						<?php
							the_field('intro_text');
						?>
					</div>
					<div class="col-md-4 homeCTA">
						<?php
							the_field('contact_info');
						?>
					</div>

				</div>
			</div>
	</div>
	<div class="container serviceContainer">
		<div class="row">
				<?php if( have_rows('services') ): 
					 while( have_rows('services') ): the_row(); 
					// vars
					$title = get_sub_field('title');
					$description = get_sub_field('description');
					$link = get_sub_field('link');
					$image = get_sub_field('image');
				?>
				<div class="col-sm-12 col-md-12 col-lg-4">
					<div class="animation-element fade-up">
						<div class="serviceBlock d-flex align-items-end" style="background-image: url('<?php echo $image['url']; ?>'); background-size: cover; background-position: center center;">
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


		<div class="container mb-4" style="margin-top: -50px;">
			<div class="row">
				<div class="col text-center animation-element fade-up">
					<?php
					get_template_part( 'template-parts/pageaptbutton' );
					?>
				</div>
			</div>
		</div>




			<?php
			get_template_part( 'template-parts/videoblock' );
			?>


			<?php
			get_template_part( 'template-parts/technologyblock' );
			?>





			<?php
			get_template_part( 'template-parts/newsblock' );
			?>


			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>

		</div>
</article><!-- #post-## -->



