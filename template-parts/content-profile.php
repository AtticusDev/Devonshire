<?php
/**
 * Template part for displaying page content in profile.php
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
				<div class="row justify-content-center">
					<div class="col-md-8 p-2">
						<h1 class="underline-gold"><?php the_title(); ?></h1>
						<p class="gold"><?php the_field('title'); ?><br />
						<?php the_field('qualifications'); ?></p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6">
						<img src="<?php the_post_thumbnail_url(); ?>">
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6 mt-3 text-center animation-element fade-up">
						<a href="/make-an-appointment/" class="btn largeBtn bgblue gold">Book an appointment</a>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6 mb-4 text-center animation-element fade-up">
						<p class="gold"><?php the_content(); ?></p>
					</div>
				</div>
			</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="container mt-4 mb-4 text-left">
				<div class="row">
					<div class="col-md-6 p-5 animation-element fade-up">
						<p><?php the_field('description1'); ?></p>
					</div>
					<div class="col-md-6 p-5 animation-element fade-up">
						<p><?php the_field('description2'); ?></p>
					</div>

				</div>
			</div>
		</div>
	</div>


			<?php
			get_template_part( 'template-parts/videoblock' );
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

	<?php
		the_field('schema');
	?>


