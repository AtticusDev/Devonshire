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
				<div class="col-md-12 footer-contact">
				info@thedevonshireclinic.co.uk&nbsp;&nbsp;+44 (0) 20 3918 9601</h1>
				</div>
				<div class="col-sm-12 col-md-6 footer-title-white-norule">
					Subscribe to our Newsletter
					<div>
					  <form role="search" method="get" class="form newsletter-form" action="/index.php">
						<div class="input-group">
					      <input name="s" type="text" placeholder="Email address">
					      <span class="input-group-btn">
					        <button type="submit" value="Search" type="button">Subscribe</button>
					    	</span>
						</div>
						</form>
					</div>

				</div>
				<div class="col-sm-12 col-md-2 d-flex justify-content-between socialIcons">
						<?php
					// check if the repeater field has rows of data
					if( have_rows('social_media', 'option') ):

					 	// loop through the rows of data
					    while ( have_rows('social_media', 'option') ) : the_row();
				    	?>
				    	<div style="width: 1.1rem;">
				    	<a href="<?php the_sub_field('sm_link'); ?>">
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

</body>
</html>
