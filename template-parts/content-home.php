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
				<div class="row">
					<div class="col-md-12 text-white intro-strap">
					<?php
						the_content();
					?>
					</div>
					<div class="col-md-4 homeIntro">
						The Devonshire Clinic is a private skin clinic based in Harley Street, London. Our team of dermatologists provide specialised skin treatments including both medical and cosmetic dermatology
					</div>
				</div>
				<div class="row justify-content-end">
					<div class="col-md-4 homeCTA">
						Talk to us about
						your condition or
						needs 020 7034 8057
					</div>

				</div>
			</div>
			<div class="container" style="height: 600px;">
				<div class="row">
					<div class="col-md-4">
						<div class="animation-element fade-up">
							<div class="serviceBlock" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/legs.jpg');">
							This is the animated element
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="animation-element fade-up">
							<div class="serviceBlock" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/legs.jpg');">
							This is the animated element
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="animation-element fade-up">
							<div class="serviceBlock" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/legs.jpg');">
							This is the animated element
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col text-center animation-element fade-up">
				<a href="/contact/" class="btn appointmentBtn blue-gold">Book an appointment</a>
			</div>
		</div>
	</div>





</article><!-- #post-## -->



