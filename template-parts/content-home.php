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
	<div class="container-fluid" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-position: center bottom;  background-repeat: no-repeat; padding: 0px; height: 1015px;">
			<?php
			get_template_part( 'template-parts/topnav' );
			?>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-white">
					<?php
						the_content();
					?>
					</div>
					<div class="col-md-4 homeIntro">
						The Devonshire Clinic is a private skin clinic based in Harley Street, London. Our team of dermatologists provide specialised skin treatments including both medical and cosmetic dermatology
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4" style="">
			</div>
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
			</div>





</article><!-- #post-## -->



