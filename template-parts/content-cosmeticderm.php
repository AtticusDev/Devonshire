<?php
/**
 * Template part for displaying page content in cosmeticderm.php
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
				<div class="row">
					<div class="col-md-6 introPanel">
						<h1><?php the_title();  ?></h1>
						<p><?php the_content();  ?></p>

						<?php
						get_template_part( 'template-parts/buttonsblock' );
						?>


					</div>
					<div class="col-md-6">
						<div class="imageContainer">
							<img src="<?php the_post_thumbnail_url(); ?>">
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

	<div class="container-fluid mt-0 mb-4 pt-5 pb-5" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/cosmetic-derm-bg.jpg'); background-position: center center; background-size: cover;">
		<a id="treatments"></a>
		<div class="row justify-content-center">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center animation-element fade-up">
						<h2 class="underline-gold gray">Cosmetic Dermatology Treatments</h2>

					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="container">
				<div class="row justify-content-center">


					<?php
					$args = array(
					 'post_type' => 'treatment',
					 'posts_per_page' => '20',
					 'meta_key' => 'order_number',
					 'orderby' => 'meta_value_num',
					 'order' => 'ASC', 
					'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field'    => 'slug',
								'terms' => 'cosmetic-dermatology'
							),
						),
					 );

					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>

				<div class="col-md-6 p-3">
					<div class="p-4 text-center animation-element fade-up" style="background-color: #ffffff;">
						<a href="<?php the_permalink(); ?>">
							<h3 class="underline-blue"><?php the_title(); ?></h3></a>
							<a href="<?php the_permalink(); ?>" class="btn smallBlueWhiteBtn">Read More</a>
					</div>
				</div>

				<?php
					endwhile;

					wp_reset_query();

					?>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="generalTreatment animation-element fade-up">
					<h3 class="underline-gold">Enquire about <?php the_title(); ?></h3>
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



