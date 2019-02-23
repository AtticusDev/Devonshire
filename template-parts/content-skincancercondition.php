<?php
/**
 * Template part for displaying page content in skincancercondition.php
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
						<?php
						get_template_part( 'template-parts/buttonsblock' );
						?>


					</div>
					<div class="col-md-4">
						<div class="p-4 mb-4" style="background-color: #ffffff; width:100%;">
							<h3 class="underline-gold">Enquire about<br />
								<span class="gold"><?php the_title(); ?></span></h3>

							<?php
								echo do_shortcode('[gravityform id=2 name=Enquiry title=false description=false]');
							?>
						</div>
						<div class="text-center">
						<?php
						get_template_part( 'template-parts/sideaptbutton' );
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
						<h2 class="underline-gold gray">Available <?php the_title(); ?> Treatments</h2>
					</div>
				</div>
				<div class="row">

				<?php 
				$posts = get_field('select_treatment');
				if( $posts ): ?>
				    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			        <?php setup_postdata($post);
			        ?>
					<div class="col-md-6 p-3">
						<div class="cancerTreatment animation-element fade-up">
							<div class="p-4 text-center" style="background-color: #ffffff;">
								<a href="<?php the_permalink(); ?>">
									<h3 class="underline-blue"><?php the_title(); ?></h3></a>
									<p class="mb-1"><?php the_excerpt(); ?></p>
									<a href="<?php the_permalink(); ?>" class="btn smallBlueWhiteBtn">Read More</a>
							</div>
						</div>
					</div>
				    <?php endforeach; ?>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>						

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
						<p class="gold"><?php the_field('why_devonshire'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>


			<?php
			get_template_part( 'template-parts/facilitiesblock' );
			?>


			<?php
			get_template_part( 'template-parts/specialistsblock' );
			?>


			<?php
			get_template_part( 'template-parts/technologyblock' );
			?>



			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>

</article><!-- #post-## -->

<!-- JSON-LD markup generated for Local Business -->

	<?php
		the_field('schema');
	?>
