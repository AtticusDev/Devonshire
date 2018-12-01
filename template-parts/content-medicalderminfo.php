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
						<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p>
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

	<div class="container mt-5 mb-5">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center animation-element fade-up">
				<h2 class="underline-gold gray">Medical Dermatology Conditions</h2>
			</div>
		</div>
		<div class="row justify-content-center">

					<?php
					$args = array(
					 'post_type' => 'condition',
					 'meta_key' => 'order_number',
					 'orderby' => 'meta_value_num',
					 'order' => 'ASC', 
					'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field'    => 'slug',
								'terms' => 'medical-dermatology'
							),
						),
					 );

					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>

			<div class="col-md-6 p-3">
				<div class="cancerTreatment">
					<div class="p-4 text-center" style="background-color: #ffffff;">
						<a href="<?php the_permalink(); ?>">
							<h3 class="underline-blue"><?php the_title(); ?></h3></a>
							<p class="mb-1"><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>" class="btn smallBlueWhiteBtn">Read More</a>
					</div>
				</div>
			</div>

				<?php
					endwhile;

					wp_reset_query();

					?>
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
			get_template_part( 'template-parts/testimonialblock' );
			?>


			<?php
			get_template_part( 'template-parts/newsblock' );
			?>



			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>

</article><!-- #post-## -->



