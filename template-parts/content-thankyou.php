<?php
/**
 * Template part for displaying page content in thankyou.php
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
					<div class="col-md-6 text-center">
						<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p>

						<a href="<?php echo home_url(); ?>" class="btn navGoldWhiteBtn">Back to home</a><br />
						<p>&nbsp;</p>
										
					</div>
				</div>
			</div>
	</div>

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



