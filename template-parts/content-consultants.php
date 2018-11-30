<?php
/**
 * Template part for displaying page content in consultants.php
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
					<div class="col-md-8 text-center">
						<h2 class="underline-gold gray mt-5 mb-2">Our Skin Cancer<br />Specialists</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 p-5">
						<a href="/consultants/conal-perrett/"><div class="p-4 d-flex align-items-end docImage" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/doctor.jpg'); background-repeat: no-repeat; width: 100%; height: 350px;">
							<div class="docBlockGray">
									<div class="docName">Dr Conal Perrett</div>
									<div class="docTitle">Consultant Dermatologist</div>
							</div>
						</div></a>
					</div>
					<div class="col-md-4 p-5">
						<div class="p-4 d-flex align-items-end docImage" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/doctor.jpg'); background-repeat: no-repeat; width: 100%; height: 350px;">
							<div class="docBlockGray">
									<div class="docName">Dr Jane McGregor</div>
									<div class="docTitle">Consultant Dermatologist</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 p-5">
						<div class="p-4 d-flex align-items-end docImage" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/doctor.jpg'); background-repeat: no-repeat; width: 100%; height: 350px;">
							<div class="docBlockGray">
									<div class="docName">Dr Duncan Atherton</div>
									<div class="docTitle">Consultant Dermatologist</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>



			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>

</article><!-- #post-## -->



