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
					<div class="col-md-6 pl-5 pr-5">
						<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p>

						<?php
						get_template_part( 'template-parts/buttonsblock' );
						?>



					</div>
					<div class="col-md-6">
						<div class="imageContainer">
							<img src="<?php the_post_thumbnail_url(); ?>" class="imageAnimate">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col text-center animation-element fade-up">
					<?php
					get_template_part( 'template-parts/pageaptbutton' );
					?>
					</div>
				</div>
			</div>
	</div>

	<div class="container mt-5 mb-5">
		<a id="treatments"></a>
		<div class="row justify-content-center">
			<div class="col-md-6 text-center animation-element fade-up">
				<h2 class="underline-gold gray">Skin Cancer Treatments</h2>
			</div>
		</div>
		<div class="row justify-content-center">

					<?php
					$args = array(
					 'post_type' => 'treatment',
					 'meta_key' => 'order_number',
					 'orderby' => 'meta_value_num',
					 'order' => 'ASC', 
					'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field'    => 'slug',
								'terms' => 'skin-cancer'
							),
						),
					 );

					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>

			<div class="col-md-6 p-3">
				<div class="cancerTreatment animation-element fade-up">
					<div class="p-4 text-center" style="background-color: #ffffff; min-height: 250px;">
						<a href="<?php the_permalink(); ?>">
							<h3 class="underline-blue"><?php the_title(); ?></h3></a>
							<?php
							$string = get_the_content();
							?>
							<p class="mb-1"><?php echo mb_strimwidth($string, 0, 120, '[...]'); ?></p>
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


	<div class="container mb-5">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="cancerTreatment animation-element fade-up">
					<h3 class="underline-gold">Enquire about Skin Cancer</h3>
				<?php
					echo do_shortcode('[gravityform id=1 name=Enquiry title=false description=false]');
				?>
				</div>
			</div>
		</div>
	</div>





			<?php
			get_template_part( 'template-parts/videoblock' );
			?>


			<?php
			get_template_part( 'template-parts/specialistsblock' );
			?>


			<?php
			get_template_part( 'template-parts/secondopinion' );
			?>



			<?php
			get_template_part( 'template-parts/newsblock' );
			?>


			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>

</article><!-- #post-## -->



