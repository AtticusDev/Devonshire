<?php
/**
 * Template part for displaying page content in technology.php
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
					<div class="col-md-6 p-5 text-left">
						<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p>

					</div>
					<div class="col-md-6">
						<img src="<?php the_post_thumbnail_url(); ?>" class="mt-5">
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

	<div class="container-fluid">
		<div class="row">
			<div class="container mb-4">
				<div class="row">
					<div class="col-md-8 p-5 animation-element fade-up text-left">
						<p><?php the_field('description'); ?></p>
					</div>
					<div class="col-md-4 mt-4 p-4 animation-element fade-up text-left"  style="background-color: #f8f7f2;">
						<div class="p-3 text-center" style="background-color: #ffffff; width:100%;">
							<h3 class="underline-gold">Enquire about<br />
								<span class="gold"><?php the_title(); ?></span></h3>

							<?php
								echo do_shortcode('[gravityform id=2 name=Enquiry title=false description=false]');
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>







			<?php
			get_template_part( 'template-parts/testimonialblock-yellow' );
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


