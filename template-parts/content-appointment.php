<?php
/**
 * Template part for displaying page content in appointment.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Devonshire
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-fluid">
			<?php
			get_template_part( 'template-parts/topnav' );
			?>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 p-5">
					<h1><?php
					the_title();
					?>
					</h1>
					<?php
							echo do_shortcode('[gravityform id=3 name=Enquiry title=false description=false]');
					?>

					</div>
				</div>
			</div>
	</div>

			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>

</article><!-- #post-## -->



