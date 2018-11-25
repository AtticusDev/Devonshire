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
					<div class="col-md-6 p-5">
						<h1>Aerolase Lightpod Neo</h1>
						<p>Skin cancer can arise anywhere on the skin but it
						is more common on the parts that are exposed
						to sunlight; the face, hands, neck, and arms. Even
						though it is one of the most common cancers skin
						cancer kills a relatively small number of people
						because, when detected early, it is usually treatable</p>

					</div>
					<div class="col-md-6">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/tech-pic.jpg" class="mt-5">
					</div>
				</div>
				<div class="row">
					<div class="col text-center animation-element fade-up">
						<a href="/contact/" class="btn largeBlueGoldBtn">Book an appointment</a>
					</div>
				</div>
			</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="container mb-4">
				<div class="row">
					<div class="col-md-8 p-5 animation-element fade-up text-left">
						<p>Bearunt molorib ustiumqui utetur, nam et mod ercil estesto ressit volor sequo
quaepelit omnihicabor maiorro berferu ptatem sequam idendit et assimin ulparum
si cone pellupta verovid emolut que num, conse quunt, sequunte pel inctis ut laut
ut repudae ctinitatur, quibusa perere idi as nimus veliquos ex exerovid minvell
audipidis est, oditem
This is the laser that we have been waiting for, the Aerolase Lightpod Neo. In our opinion, the best laser in the
market with a wide array of applications treating both medical and cosmetic conditions.
How it works
The Lightpod Neo delivers exceptionally high energy within a uniquely short pulse duration. The short pulse
duration avoids thermally over-stressing the skin, which eliminates treatment pain and reduces the risk of
adverse effects commonly seen with the previous generation of lasers.
If you are suffering with any of the above conditions and would like to know more about how we can help, or
would just like to know more about the treatment then please contact us on:
+44 (0) 20 7034 8057</p>
					</div>
					<div class="col-md-4 mt-4 p-4 animation-element fade-up text-left"  style="background-color: #f8f7f2;">
						<div class="p-3" style="background-color: #ffffff; width:100%;">
							<h3 class="underline-gold">Enquire about<br />
								<span class="gold">Aerolase Lightpod Neo</span></h3>

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
			get_template_part( 'template-parts/news' );
			?>


			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>

</article><!-- #post-## -->



