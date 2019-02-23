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


<!-- JSON-LD markup generated for Local Business -->

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "MedicalClinic",
  "name": "The Devonshire Clinic",
  "image": "http://thedevonshireclinic.co.uk/wp-content/themes/devonshire-clinic/assets/the-devonshire-clinic-logo-new2.svg",
  "@id": "http://thedevonshireclinic.co.uk/#localbusiness",
  "url": "http://thedevonshireclinic.co.uk/",
  "telephone": "+44 (0) 20 3918 7970",
  "priceRange": "£££",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "16 Devonshire Street",
    "addressLocality": "London",
    "postalCode": "W1G7AF",
    "addressCountry": "GB"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 51.5220411,
    "longitude": -0.14709340000001703
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday"
    ],
    "opens": "08:30",
    "closes": "19:00"
  },
  "sameAs": "https://www.facebook.com/TheDevonshireClinic/"
}
</script>
