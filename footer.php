<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Devonshire
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 footer-contact-email">
					<a href="mailto:info@thedevonshireclinic.co.uk">info@thedevonshireclinic.co.uk</a>
				</div>
				<div class="col-md-4 footer-contact-number">
					  <span class="rTapNumber321152">020 7034 8057</span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<div class="footer-title-white-norule">
					Subscribe to our Newsletter
					</div>
					<div>
						<?php
							echo do_shortcode('[gravityform id=4 name=Newsletter title=false description=false]');
						?>
					</div>
				</div>

				<div class="col-sm-12 col-md-2 d-flex justify-content-center socialIcons">
						<?php
					// check if the repeater field has rows of data
					if( have_rows('social_media', 'option') ):

					 	// loop through the rows of data
					    while ( have_rows('social_media', 'option') ) : the_row();
				    	?>
				    	<div class="socialLinks">
				    	<a href="<?php the_sub_field('sm_link'); ?>" target="_blank">
	    				<?php
						// display a sub field value
				        the_sub_field('sm_icon');
				        ?>
				    	</a>
					    </div>

				        <?php
					    endwhile;
						else :
						    echo "nothing found here";
						endif;
						?>
				</div>


				<div class="col-sm-12 col-md-4">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/devonshire-logo-stacked.svg" class="footer-logo">
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-sm-12 col-md-2">
					<span class="footer-title-white">Navigation</span><br />
					<span class="footer-body">
					<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>	
					</span>
				</div>
				<div class="col-sm-12 col-md-2">
					<span class="footer-title-white">In the news</span><br />
					<span class="footer-body">
						<ul class="menu">
					<?php query_posts(array('post_type' => 'post','orderby' => 'date', 'posts_per_page' => '3')); 
					    if(have_posts()) : while(have_posts()) : the_post();
					    	?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					    <?php				    
					    endwhile; else:
						    echo "no posts here";
					    endif; wp_reset_query();
					?>
						</ul>					
					</span>
				</div>
				<div class="col-sm-12 col-md-2">
					<span class="footer-title-white">General</span><br />
					<span class="footer-body">
					<?php wp_nav_menu( array( 'theme_location' => 'general' ) ); ?>	
					</span>
				</div>
				<div class="col-sm-12 col-md-2">
					<span class="footer-title-white">Address</span><br />
					<span class="footer-body">
						<?php the_field('global_address', 'option'); ?>
					</span>
				</div>
				<div class="col-sm-12 col-md-4 CQCpanel">
						<?php the_field('cqc_logo', 'option'); ?>				
				</div>
			</div>
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">
   var adiInit = "54702", adiRVO = true;
   var adiFunc = null;
   (function() {
      var adiSrc = document.createElement("script"); adiSrc.type = "text/javascript";
      adiSrc.async = true;
      adiSrc.src = ("https:" == document.location.protocol ? "https://static-ssl" : "http://static-cdn")
      	+ ".responsetap.com/static/scripts/rTapTrack.min.js";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(adiSrc, s);
   })();
</script>
</body>
</html>
